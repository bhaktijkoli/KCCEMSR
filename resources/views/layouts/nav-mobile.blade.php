<header class="header fixed clearfix navbar navbar-fixed-top" id="navmobile" {{isset($nav_trans)?"data-navtransparent":""}}>
	<div class="container" id="head-container">
		<div class="row">
			<div class="nav-wrapper">
				<a href="#" class="js-nav-toggle">
					<span></span>
				</a>
				<nav role="navigation">
					<div class="nav-toggle">
						<span class="nav-back"></span>
						<span class="nav-title" style="font-weight: bold;">Menu</span>
						<span class="nav-close"></span>
					</div>
					<ul>
						@if (Auth::check())
						@if (Auth::user()->type == 1)
						<li style="background-color: #ffffff;">
							<a href="" class="inactiveLink" style="color: black;font-weight: bold;">Hello, {{Auth::user()->fullname}}</a>
							<a href="" id="hover_black_nav" style="color: black;font-weight: bold;text-align: right;padding-right: 5%;">Logout</a>
						</li>
						@endif
						@endif
						{{-- <li>
							<a href="/">Home</a>
						</li> --}}
						<li class="has-dropdown">
							<a href="#">About</a>
							<ul>
								<li><a href="{{route('about')}}">College Info</a></li>
								<li><a href="{{route('about')}}#vision">Vision &amp; Mission</a></li>
								<li><a href="{{route('about')}}#chp-msg">Chairperson's Message</a></li>
								<li><a href="{{route('about')}}#md-msg">MD's Message</a></li>
								<li><a href="{{route('about')}}#coo-msg">COO's Message</a></li>
								{{-- <li><a href="{{route('about')}}#ceo-msg">CEO Message</a></li> --}}
								<li><a href="{{route('about')}}#prncp-msg">Principal's Message</a></li>
								<li><a href="{{route('hr-handbook')}}">HR Handbook</a></li>
								{{-- <li><a href="{{route('about')}}">Board of Governance</a></li> --}}
								<li><a href="{{route('infrastructures')}}">Infrastructure</a></li>
								<li><a href="{{route('committees')}}">Committees</a></li>
								<li><a href="{{asset('about/iso_certification.pdf')}}" target="_blank">ISO Certification</a></li>
								<li><a href="{{route('grievance-redressal')}}">Grievance Redressal</a></li>
								{{-- <li><a href="{{route('careeratkc')}}">Career At KC</a></li> --}}
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Academics</a>
							<ul>
								<li><a href="{{route('academic-calendar')}}">Academic Calendar</a></li>
								<li><a href="{{route('department-list')}}">Departments</a></li>
								<li><a href="{{route('notices')}}">Notices</a></li>
								<li><a href="http://www.learningatkc.com/moodle/login/index.php" target="_blank">KC-Moodle</a></li>
								<li><a href="{{route('publications')}}">Publications</a></li>
								<li><a href="{{route('rd', 'aim')}}">Research &amp; Development</a></li>
								<li><a href="{{route('vac')}}">Value Added Cell</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Library</a>
							<ul>
								<li><a href="{{route('library-about')}}">About Library</a></li>
								<li><a href="{{route('library-about')}}/#digital-library">Digital Library</a></li>
								<li><a href="http://library.biyanitechnologies.com/LogInPageController/LogInUser?Username=kc_student&Password=kc_student" target="_blank">OPAC</a></li>
								<li><a href="{{route('question-papers')}}">Question Papers</a></li>
								<li><a href="{{route('ebooks')}}">Journals</a></li>
								<li><a href="{{route('syllabus')}}">Syllabus</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Admissions</a>
							<ul>
								<li><a href="{{route('admissions-details')}}">Admissions 2020</a></li>
										<li><a href="{{route('admissions-apply')}}">FE Admission 2020-21 Apply Online</a></li>
										<li><a href="{{route('admissions-apply')}}">Direct Second Year 2020-21 Apply Online</a></li>	
																				<li><a href="/public/merit-list/16th-december-2020-merit-list.pdf" target="_blank">Merit List - 16th December 2020</a></li>
							<li><a href="{{route('admissions', 'admission-criteria')}}">Admission Criteria</a></li>
								{{-- <li><a href="{{route('admissions', 'fees-notices')}}">Fees Notices</a></li> --}}
								<li><a href="{{route('admissions', 'institute-prospectus')}}">Institute Prospectus</a></li>
								<li><a href="{{route('admissions', 'dte-admission-information-brochure')}}">DTE Admission Information Brochure</a></li>
								<li><a href="{{route('admissions', 'total-intake')}}">Total Intake</a></li>
								{{-- <li><a href="{{route('admissions', 'cap-rount-allottment')}}">Cap Round Allottment</a></li> --}}
								{{-- <li><a href="{{route('admissions', 'direct-second-year')}}">Direct Second Year</a></li> --}}
								<li><a href="{{route('admissions', 'anti-ragging-affidavit')}}">Anti-ragging Affidavit</a></li>
								<li><a href="{{route('admissions', 'scholarship')}}">Scholarship</a></li>
								<li><a href="{{route('mockcet2020')}}">Mock CET 2020</a></li>
								<li><a href="{{route('admissions-fees')}}">Fees Details</a></li>
								<li><a href="https://practiceform.learningatkc.com">Practice Registration Form for Engineering</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Exam</a>
							<ul>
								<li><a href="{{route('exam', 'notices')}}">Exam Notices</a></li>
								<li><a href="{{route('exam', 'timetable')}}">Exam Timetable</a></li>
								{{-- <li><a href="{{route('exam', 'results')}}">Exam Results</a></li> --}}
								<li><a href="#">Exam Rules &amp; Procedures</a></li>
								<li><a href="{{route('exam-helpline')}}">Helpline Numbers for Examination 2020</a></li>
								{{-- <li><a href="{{route('sample-question-paper-kt-exam-2020')}}">Sample Question Paper KT Exam 2020</a></li> --}}
								<li><a href="https://drive.google.com/drive/folders/1I3l7YZc-44QQKfR28porCD9mMXa8Nk4z?usp=sharing">Sample Question Paper for Dec 2020 Exam</a></li>
								<li><a href="https://docs.google.com/forms/d/e/1FAIpQLScof6pqGTqb7pEzgpRC74dhAAWOAb4E_TtZmUaj1ZcCevEuYg/viewform">Transcript Application Form</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Student Corner</a>
							<ul>
								<li><a href="http://www.kcecell.org/" target="_blank">KC Ecell</a></li>
								<li><a href="{{route('lifeatkc')}}">Life At KC</a></li>
								<li><a href="{{route('student-corner', 'student-council')}}">Student Council</a></li>
								<li><a href="{{route('student-corner', 'student-handbook')}}">Student Handbook</a></li>
								{{-- <li><a href="{{route('student-corner', 'student-discipline')}}">Student Discipline</a></li> --}}
								<li><a href="{{route('student-development')}}">Student Development</a></li>
								<li><a href="https://www.youtube.com/watch?v=fWECyi8vmL8&list=PLZSzAtoBtkwXHjZ4LJdCDSrYdOhLQSWzf" target="_blank">Video Lectures</a></li>
							</ul>
						</li>
						<li>
							<a href="{{route('kcinmedia')}}">KC in Media</a>
						</li>
						<li class="has-dropdown">
							<a href="#">Statutory Affiliations</a>
							<ul>
								<li><a href="{{route('mandatory-disclosure', 'mandatory-disclosure')}}">Mandatory Disclosure</a></li>
								<li><a href="{{route('mandatory-disclosure', 'aicte-affiliation')}}">AICTE Affiliation</a></li>
								<li><a href="{{route('mandatory-disclosure', 'dte')}}">DTE Affiliation</a></li>
								<li><a href="{{route('mandatory-disclosure', 'university-affiliation')}}">University affiliation</a></li>
								<li><a href="{{route('grievance-redressal')}}">Grievance Redressal</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">NAAC</a>
							<ul>
								{{-- <li><a href="{{route('iqac', 'introduction')}}">IQAC</a></li> --}}
								<li><a href="{{route('naac-ssr')}}">SSR</a></li>
								<li><a href="{{route('naac-sop')}}">SOP</a></li>
								<li><a href="{{route('naac-feedback')}}">Feedback</a></li>
								<li><a href="{{route('naac-AQAR-2018-19')}}">AQAR-2018-19</a></li>
								<li><a href="{{route('naac-AQAR-2019-20')}}">AQAR-2019-20</a></li>
								<li><a href="{{url('/public/naac/course-outcome-2018-19.pdf')}}">Course Outcome 2018-19</a></li>
								<li><a href="{{url('/public/naac/course-outcome-2019-20.pdf')}}">Course Outcome 2019-20</a></li>
								<li><a href="{{url('/public/naac/sss-2018-19.pdf')}}">SSS 2018-19</a></li>
								<li><a href="{{url('/public/naac/sss-2019-20.pdf')}}">SSS 2019-20</a></li>
								<li><a href="{{route('naac-institutional-distinctiveness')}}">Institutional Distinctiveness</a></li>
								<li><a href="{{route('naac-best-practices')}}">Best Practices</a></li>
								<li><a href="{{route('naac-academic-calendar-2018-19')}}">Academic Calender 2018-19</a></li>
							</ul>
						</li>
						{{-- <li class="has-dropdown">
							<a href="#">Alumni</a>
							<ul>
								<li><a href="{{route('alumni-login')}}">Alumni Login</a></li>
								<li><a href="#">Alumni Portal</a></li>
								<li><a href="#">Alumni Association</a></li>
							</ul>
						</li> --}}
						{{-- <li class="has-dropdown">
							<a href="#">Placements</a>
							<ul>
								<li><a href="{{route('placements')}}#about">About TPO</a></li>
								<li><a href="{{route('placements')}}#functions">Function &amp; Responsibilities</a></li>
								<li><a href="{{route('placements')}}#statistics">Placement Statistics</a></li>
								<li><a href="{{route('placements')}}">Training &amp; Placement Process</a></li>
								<li><a href="{{route('placements')}}">Higher Studies</a></li>
								<li><a href="{{route('placements')}}#reviews">Reviews</a></li>
							</ul>
						</li> --}}
						<li>
							<a href="{{route('iqac', 'introduction')}}">IQAC</a>
						</li>
						<li>
							<a href="/#contact">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
			
			<!--NAV DATA END-->
			
			<div class="clg-name container">
				<div class="header-left clearfix">
					
					<div class="logo smooth-scroll"  style="float: left;">
						<a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" alt="KC College logo" height="65" width="65"></a>
					</div>
					
					<div class="smooth-scroll">
						<div class="site-name" style="padding-bottom: 0px;">
							<p style="font-size: 0.6em;margin: 0px;padding: 0px;line-height: 0.8;">Excelssior Education Society's</p>
							<a href="/" id="head-site-name" style="text-decoration:none;">K.C. College of Engineering &amp; Management Studies &amp; Research</a>
							<p class="lead" style="margin:0px;font-weight:900;font-size:15px;">NAAC Accredited with B++ Grade</p>
						</div>
					</div>
				</div>
				<!-- header-left end -->
			</div>
		</div><!-- #wrapper -->
	</div>
</header>
<!-- header end -->
