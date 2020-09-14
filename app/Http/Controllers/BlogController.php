<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogs()
    {
        $client = new Client();
        // Get Categories
        $response = $client->get(env('ERP_URL') . '/api/oauth/blog-category/get');
        $body = (string) $response->getBody();
        $categories = json_decode($body)->data;
        // Get Blogs
        $response = $client->get(env('ERP_URL') . '/api/oauth/blog/get');
        $body = (string) $response->getBody();
        $blogs = json_decode($body)->data;
        return view('pages.blogs.blogs', [
            'categories' => $categories,
            'blogs' => $blogs,
        ]);
    }

    public function details($url)
    {
        $client = new Client();
        $response = $client->get(env('ERP_URL') . '/api/oauth/blog/get?slug=' . $url);
        $body = (string) $response->getBody();
        $blog = json_decode($body)->data[0];
        return view('pages.blogs.details', [
            'blog' => $blog,
        ]);
    }
}
