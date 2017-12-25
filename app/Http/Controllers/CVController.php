<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\Language;
use App\Skill;
use App\Job;
use App\CV;

class CVController extends Controller
{
    public function index(){
      $coreskills = Skill::where('rank','first')->get();
      $otherskills = Skill::where('rank','second')->get();
      $educations = Education::all();
      $jobs = Job::all();
      $info = CV::all();
      $languages = Language::all();

      $data = [
        'coreskills'=>$coreskills,
        'otherskills'=>$otherskills,
        'educations'=>$educations,
        'jobs'=>$jobs,
        'info'=>$info,
        'languages'=>$languages
      ];
      return view('cv.index',$data);
    }
    public function createJob(){
        return view('cv.work.create');
    }

    public function storeJob(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
            'from'=>'required'
        ]);

        $job = new Job();
        $job->company = $request->input('name');
        $job->position = $request->input('position');
        $job->from = $request->input('from');
        if ($request->has('to')){
            $job->to = $request->input('to');
        }
        $job->save();

        return redirect()->route('cv');
    }

    public function editJob($id){
        $job = Job::findOrFail($id);
        return view('cv.work.edit',['job'=>$job]);
    }

    public function updateJob(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'position'=>'required',
            'from'=>'required'
        ]);

        $job = Job::findOrFail($id);
        $job->company = $request->input('name');
        $job->position = $request->input('position');
        $job->from = $request->input('from');
        if ($request->has('to')){
            $job->to = $request->input('to');
        }
        $job->update();

        return redirect()->route('cv');
    }

    public function deleteJob($id){
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('cv');
    }

    public function createInfo(){
        $info = CV::all();

        if(empty($info)){
            return view('cv.basic.create');
        }else{
            return redirect()->back();
        }
    }

    public function storeInfo(Request $request){
        $info = CV::all();

        if(empty($info)){
            $this->validate($request,[
                'name'=>'required',
                'birthday'=>'required',
                'country'=>'required',
                'city'=>'required'
            ]);

            $cv = new CV();
            $cv->name = $request->input('name');
            $cv->bith = $request->input('birthday');
            $cv->city = $request->input('city');
            $cv->country = $request->input('country');
            $cv->save();

            return redirect()->route('cv');
        }else {
            return redirect()->back();
        }
    }

    public function editInfo($id){
        $info = CV::findOrFail($id);
        return view('cv.basic.edit',['info'=>$info]);
    }

    public function updateInfo(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'birthday'=>'required',
            'country'=>'required',
            'city'=>'required'
        ]);

        $cv = CV::findOrFail($id);
        $cv->name = $request->input('name');
        $cv->bith = $request->input('birthday');
        $cv->city = $request->input('city');
        $cv->country = $request->input('country');
        $cv->update();

        return redirect()->route('cv');
    }

    public function test(){}

}
