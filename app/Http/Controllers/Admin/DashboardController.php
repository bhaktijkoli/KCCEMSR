<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Carousel;
use App\Event;
use App\Eventimage;
use App\Department;
use App\Publication;
use App\Committee;
use App\FileUpload;
use Excel;
use Storage;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin');
  }

  // Home
  public function home()
  {
    return view("pages.admin.dashboard");
  }
  //Carousel
  public function carousel()
  {
    return view("pages.admin.carousel");
  }
  //New Carousel
  public function newcarousel()
  {
    return view("pages.admin.newcarousel");
  }
  //Edit Carousel
  public function editcarousel($id)
  {
    $car = Carousel::where("id", $id)->first();
    if (!$car) abort(404, "Page Not Found");
    return view("pages.admin.newcarousel", compact('car'));
  }
  // Testimonials
  public function testimonials()
  {
    return view("pages.admin.testimonials");
  }
  // Infrastructures
  public function infrastructures()
  {
    return view("pages.admin.infrastructure");
  }
  // Events
  public function events()
  {
    return view("pages.admin.events");
  }
  // New Events
  public function newevent()
  {
    return view("pages.admin.newevent");
  }
  // New Events
  public function editevent($id)
  {
    $event = Event::where("id", $id)->first();
    if (!$event) abort(404, "Page Not Found");
    $images = Eventimage::where("event", $id)->get();
    return view("pages.admin.editevent", compact("event", "images"));
  }
  public function messages()
  {
    return view("pages.admin.messages");
  }
  // Department
  public function department($url, $action)
  {
    $dep = Department::where("url", $url)->first();
    if (!$dep) abort(404, 'Page Not Found');
    return view("pages.admin.department", compact("dep", "action"));
  }
  public function department_edit($url, $action, $edit)
  {
    $dep = Department::where("url", $url)->first();
    if (!$dep) abort(404, 'Page Not Found');
    return view("pages.admin.department", compact("dep", "action", "edit"));
  }
  // Users
  public function users()
  {
    if (!Auth::user()->is_admin()) {
      return redirect()->route("admin_dashboard");
    }
    return view("pages.admin.users");
  }
  // Edit User
  public function edituser($edit)
  {
    if (!Auth::user()->is_admin()) {
      return redirect()->route("admin_dashboard");
    }
    $user = User::where('id', $edit)->first();
    if (!$user) {
      return redirect()->route("admin_users");
    }
    return view("pages.admin.edituser", compact("user"));
  }
  // Settings
  public function settings()
  {
    return view("pages.admin.settings");
  }
  // Announcements
  public function announcements()
  {
    return view("pages.admin.announcements");
  }
  // TPO Announcements
  public function tpoAnnouncements()
  {
    return view("pages.admin.tpo_announcements");
  }
  // Academics
  protected $academics_list = ['curriculum-plan', 'staff-notices', 'exam-results', 'exam-timetable', 'exam-notices', 'circulars'];
  public function academics($action)
  {
    if (!in_array($action, $this->academics_list)) abort(404, 'Page Not Found');
    return view("pages.admin.academics", compact("action"));
  }
  // Library
  public function library($action)
  {
    $library_list = FileUpload::library_list;
    $library_list_name = FileUpload::library_list_name;
    if (!in_array($action, $library_list)) abort(404, 'Page Not Found');
    $action_name = $library_list_name[array_search($action, $library_list)];
    return view("pages.admin.library", compact("action", "action_name", "library_list", "library_list_name"));
  }
  // Admissions
  public function admissions($action)
  {
    $admission_list = FileUpload::admission_list;
    $admission_name_list = FileUpload::admission_name_list;
    if (!in_array($action, $admission_list)) abort(404, 'Page Not Found');
    $action_name = $admission_name_list[array_search($action, $admission_list)];
    return view("pages.admin.admissions", compact("action", "action_name", "admission_list", "admission_name_list"));
  }
  // Admission Forms
  public function admissionForms()
  {
    return view("pages.admin.admission-form");
  }
  public function admissionFormsExport()
  {
    return Excel::create('AdmissionForms2020', function ($excel) {
      $excel->sheet('Students', function ($sheet) {
        $sheet->appendRow(array(
          'SrNo',
          'Submited on',
          'Full Name',
          'Preference 1',
          'Preference 2',
          'Preference 3',
          'Date of Birth',
          'Blood Group',
          'Sex',
          'Caste',
          'Category',
          'Nationality',
          'Physics HSC',
          'Physics CET',
          'Mathematics HSC',
          'Mathematics CET',
          'Chemistry HSC',
          'Chemistry CET',
          'Biology HSC',
          'Biology CET',
          'Vocational/Bifocal HSC',
          'Vocational/Bifocal CET',
          'SSC Marksheet',
          'HSC Marksheet',
          'CET Marksheet',
          'JEE Marksheet',

        ));
        foreach (\App\Admission::latest()->get() as $admission) {
          $data = json_decode($admission->data);
          $sheet->appendRow(array(
            strtoupper($admission->id),
            strtoupper($admission->created_at),
            strtoupper($data->surname . " " . $data->firstname . " " . $data->fathername . " " . $data->mothername),
            strtoupper($data->pre1),
            strtoupper($data->pre2),
            strtoupper($data->pre3),
            strtoupper($data->dob),
            strtoupper($data->blood),
            strtoupper($data->sex),
            strtoupper($data->caste),
            strtoupper($data->category),
            strtoupper($data->nationality),
            strtoupper($data->hscPhysics . '/' . $data->hscPhysicsMax),
            strtoupper($data->cetPhysics . '/' . $data->cetPhysicsMax),
            strtoupper($data->hscMaths . '/' . $data->hscMathsMax),
            strtoupper($data->cetMaths . '/' . $data->cetMathsMax),
            isset($data->hscChemistry) ? strtoupper($data->hscChemistry . '/' . $data->hscChemistryMax) : null,
            isset($data->cetChemistry) ? strtoupper($data->cetChemistry . '/' . $data->cetChemistryMax) : null,
            isset($data->hscBiology) ? strtoupper($data->hscBiology . '/' . $data->hscBiologyMax) : null,
            isset($data->cetBiology) ? strtoupper($data->cetBiology . '/' . $data->cetBiologyMax) : null,
            isset($data->hscVocational) ? strtoupper($data->hscVocational . '/' . $data->hscVocationalMax) : null,
            isset($data->cetVocational) ? strtoupper($data->cetVocational . '/' . $data->cetVocationalMax) : null,
            isset($data->ssc_marksheet) ? Storage::url($data->ssc_marksheet) : null,
            isset($data->hsc_marksheet) ? Storage::url($data->hsc_marksheet) : null,
            isset($data->cet_marksheet) ? Storage::url($data->cet_marksheet) : null,
            isset($data->jee_marksheet) ? Storage::url($data->jee_marksheet) : null,
          ));
        }
      });
    })->download('xls');
  }
  public function admissionFormsID($id)
  {
    $admission = \App\Admission::where('id', $id)->first();
    if (!$admission) abort(404);
    return view("pages.admissions.student-application-print", compact('admission'));
  }
  // Publication
  public function publication()
  {
    return view('pages.admin.publication');
  }
  // Committees
  public function committees()
  {
    return view('pages.admin.committees');
  }
  public function editCommittee($id)
  {
    $committee = Committee::where('id', $id)->first();
    if (!$committee) abort(404);
    return view('pages.admin.committees', compact('committee'));
  }
  // Careet at KC
  public function careeratkc()
  {
    return view('pages.admin.careeratkc');
  }
  // KC in Media
  public function kcinmedia()
  {
    return view('pages.admin.kcinmedia');
  }
  // Placements
  public function placements($action)
  {
    $placments = ['placement-process', 'student-placement'];
    if (!in_array($action, $placments)) abort(404, 'Page Not Found');
    return view("pages.admin.placements", compact("action"));
  }
  // Stories
  public function stories()
  {
    return view("pages.admin.stories");
  }
}
