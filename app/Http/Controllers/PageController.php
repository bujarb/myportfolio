<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PageController extends Controller
{
    public function index(){
      $projects = Project::orderBy('id', 'desc')->take(3)->get();
      return view('welcome',['projects'=>$projects]);
    }

    public function about(){
      return view('pages.about');
    }

    public function contact(){
      return view('pages.contact');
    }
}
