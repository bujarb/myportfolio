<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{

    public function index(){}

    public function create()
    {
        return view('languages.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'level'=>'required'
        ]);

        $language = new Language();
        $language->name = $request->input('name');
        $language->description = $request->input('description');
        $language->level = $request->input('level');

        if ($request->has('flag')) {
            $image = $request->file('flag');
            $imagename = $request->input('name').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/flag'),$imagename);
            $dest_path = 'img/flag/'.$imagename;
            $language->flag = $dest_path;
        }

        $language->save();

        return redirect()->route('cv');
    }


    public function show($id){}


    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('languages.edit',['language'=>$language]);
    }


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
        $language = Language::findOrFail($id);
        $language->delete();

        return redirect()->back();
    }
}
