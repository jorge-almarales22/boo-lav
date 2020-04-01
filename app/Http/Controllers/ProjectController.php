<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
      $projects = Project::paginate(6);
      return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $project = request()->validate([
            'title' => 'required|min:2|max:30',
            'description' => 'required|min:2|max:30'
        ]);
        Project::create($project);
        return redirect()->route('projects.index')->with('status', 'El proyecto se ha creado con exito');

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
        return view('projects.show', compact('project'));
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
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        request()->validate([
            'title' => 'required|min:2|max:30',
            'description' => 'required|min:2|max:30'
        ]);
        $project->update([
            'title' => request('title'),
            'description' => request('description')
        ]);
        return redirect()->route('projects.index')->with('status', ' El proyecto se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto se ha eliminado con exito');
    }
}
