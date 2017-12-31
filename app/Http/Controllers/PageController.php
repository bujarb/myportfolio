<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Page;

class PageController extends Controller
{
    public function index(){
      $projects = Project::orderBy('id', 'desc')->take(3)->get();
      $this->addCount('Home');
      return view('welcome',['projects'=>$projects]);
    }

    public function about(){
      $this->addCount('About');
      return view('pages.about');
    }

    public function contact(){
      return view('pages.contact');
    }

    public static function addCount($page_name){
      $page = Page::where('page_name',$page_name)->first();
      $visits = $page->visits;
      $page->visits = $visits+1;
      $page->save();
    }
}
