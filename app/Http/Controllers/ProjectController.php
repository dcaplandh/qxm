<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $validatedData = $request->validate([
          'name' => 'required|min:20|max:255',
          'description' => 'required',
          'end_date' => 'date|after:tomorrow'
      ],[
        'name.required' => 'El nombre es obligatorio',
        'description.required' => 'La descripción es obligatoria',
        'name.min' => 'No puede ser mas corto que 20 caracteres',
        'name.max' => 'No puede ser mas largo que 255 caracteres',
        'end_date.date' => 'Tiene que ser una fecha válida',
        'end_date.after' => 'Tiene que terminar en más de 24 horas',
      ]);

        $project = new Project;
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->end_date = $request->input('end_date');
        $project->f2f_budget = $request->input('f2f_budget') == null ? 0 : 1;
        $project->inmediacy = $request->input('inmediacy') == null ? 0 : 1;
        $project->user_id = \Auth::user()->id;
        $project->save();

        return redirect('/project/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
