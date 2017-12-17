<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class CVController extends Controller
{
    public function index(){
      $coreskills = Skill::where('rank','first')->get();
      $otherskills = Skill::where('rank','second')->get();
      $data = [
        'coreskills'=>$coreskills,
        'otherskills'=>$otherskills
      ];
      return view('cv.index',$data);
    }
}
