<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class EduController extends Controller
{
    public function create()
    {
        return view('education.create');
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
          'name'=>'required',
          'degree'=>'required',
          'discipline'=>'required',
          'from'=>'required',
          'logo'=>'required',
        ]);

        $education = new Education();
        $education->inst_name = $request->input('name');
        $education->degree = $request->input('degree');
        $education->discipline = $request->input('discipline');
        $education->from = $request->input('from');
        $education->to = $request->input('to');

        // save image
        if ($request->has('logo')){
            $image = $request->file('logo');
            $imagename = $request->input('name').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/logo'),$imagename);
            $dest_path = 'img/logo/'.$imagename;
            $education->logo_path = $dest_path;
        }

        $education->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
