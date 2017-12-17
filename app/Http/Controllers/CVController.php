<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\Skill;

class CVController extends Controller
{
    public function index(){
      $coreskills = Skill::where('rank','first')->get();
      $otherskills = Skill::where('rank','second')->get();
      $educations = Education::all();
      $data = [
        'coreskills'=>$coreskills,
        'otherskills'=>$otherskills,
        'educations'=>$educations
      ];
      return view('cv.index',$data);
    }
}
