<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use Image;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('skills.index',['skills'=>$skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
          'name'=>'required|min:2',
          'rank'=>'required'
        ]);

        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->rank = $request->input('rank');

        // save image
        if ($request->has('logo')){
            $image = $request->file('logo');
            $imagename = $request->input('name').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/logo'),$imagename);
            $dest_path = 'img/logo/'.$imagename;
            $skill->logo_path = $dest_path;
        }

        $skill->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skills.index');
    }
}
