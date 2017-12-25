<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Skill;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(6);
        return view('projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skill::all();
        $data = [
          'skills'=>$skills
        ];
        return view('projects.create',$data);
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
          'title' => 'required',
          'description' => 'required',
          'from' => 'required',
          'status' => 'required',
          'category' => 'required'
        ]);


        $project = new Project();
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->from = $request->input('from');
        $project->to = $request->input('to');
        $project->status = $request->input('status');
        $project->github_link = $request->input('github');
        $project->website_link = $request->input('website');
        $project->category = $request->input('category');

        $project->skills = json_encode($request->input('skills'));

        // save featured image
        if ($request->has('featured')) {
          $image = $request->file('featured');
          $imagename = time().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('img/project/featured'),$imagename);
          $dest_path = 'img/project/featured/'.$imagename;
          $project->featured_image = $dest_path;
        }

        // save other images
        if ($request->hasFile('other_images')) {
          $images = $request->other_images;
          $project_images = [];
          foreach ($images as $image) {
            $imagename = $request->input('title').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/project/images'),$imagename);
            $dest_path = 'img/project/images/'.$imagename;

            //array_push($project_images,$dest_path);

            for ($i=0; $i < count($images); $i++) {
              $project_images[$i] = $dest_path;
            }

          }
          //dd($project_images);
          $project->images = json_encode($project_images);
        }

        $project->save();

        return redirect()->route('project.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $skills = json_decode($project->skills);
        $skillbyimage = [];
        $images = json_decode($project->images);
        foreach ($skills as $skill) {
          $sk = Skill::where('name',$skill)->pluck('logo_path')->first();
          array_push($skillbyimage,$sk);
        }

        return view('projects.show',['project'=>$project,'skillbyimage'=>$skillbyimage,'images'=>$images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $skills = json_decode($project->skills);
        $allskills = Skill::all();
        return view('projects.edit',['project'=>$project,'skills'=>$skills,'allskills'=>$allskills]);
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
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'from' => 'required',
            'status' => 'required',
            'category' => 'required'
        ]);


        $project = Project::findOrFail($id);
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->from = $request->input('from');
        $project->to = $request->input('to');
        $project->status = $request->input('status');
        $project->github_link = $request->input('github');
        $project->website_link = $request->input('website');
        $project->category = $request->input('category');

        $project->skills = json_encode($request->input('skills'));

        // save featured image
        if ($request->has('featured')) {
            $image = $request->file('featured');
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/project/featured'),$imagename);
            $dest_path = 'img/project/featured/'.$imagename;
            $project->featured_image = $dest_path;
        }

        $project->update();
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->back();
    }
}
