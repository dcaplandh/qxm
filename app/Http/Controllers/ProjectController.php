<?php

namespace App\Http\Controllers;

use App\Project;
use App\Address;
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

    public function createcategory()
    {
        $id = session('project_id');
        $project = Project::find($id);
        session(['project_id' => $id]);
        return view('projects.createcategory')->with('project',$project);
    }

    public function createsubcategory()
    {
      $id = session('project_id');
      $project = Project::find($id);
      return view('projects.createsubcategory')->with('project',$project);
    }

    public function createdata()
    {
      $id = session('project_id');
      $project = Project::find($id);

      return view('projects.createdata')->with(compact('project'));
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

        return redirect('project/category')->with('project_id',$project->id);

    }

    public function storecategory(Request $request){

      $validatedData = $request->validate([
        'types' => 'required'
      ],[
        'types.required' => 'Al menos debe seleccionar una categoría'
      ]);

      $id = $request->input('project_id');
      session(['project_id'=> $id]);
      $project = Project::find($id);
      $project->types()->sync($request->input('types'));

      return redirect('project/subcategory')->with(['project_id'=>$project->id,'project'=>$project]);
    }

    public function storesubcategory(Request $request){
      $validatedData = $request->validate([
        'subtypes' => 'required'
      ],[
        'subtypes.required' => 'Al menos debe seleccionar una subcategoría'
      ]);

      $id = $request->input('project_id');
      session(['project_id'=> $id]);
      $project = Project::find($id);
      $project->subtypes()->sync($request->input('subtypes'));

      return redirect('project/data')->with(['project_id'=>$project->id,'project'=>$project]);
    }

    public function storedata(Request $request){
      $validatedData = $request->validate([
        'name' => 'required|string',
        'street' => 'nullable',
        'street_number' => 'nullable|numeric',
        'floor' => 'nullable',
        'house' => 'nullable',
        'estate' => 'nullable',
        'province' => 'nullable',
        'country' => 'nullable'
      ],[
        'name.required' => 'La dirección debe tener un nombre.'
      ]);

      $id = session('project_id')??$request->input('project_id');
      $project = Project::find($id);

      $address = new Address;
      $address->name = $request->input('name');
      $address->street = $request->input('street');
      $address->street_number = $request->input('street_number');
      $address->floor = $request->input('floor');
      $address->house = $request->input('house');
      $address->extra = $request->input('extra');
      $address->estate = $request->input('estate');
      $address->province = $request->input('province');
      $address->country = $request->input('country');
      $address->save();

      $project->address_id = $address->id;
      $project->save();
      return redirect('/profile');
    }

    public function showmine(){
      $projects = Project::where('user_id',\Auth::user()->id)->get();

      return view('projects.mine')->with(compact('projects'));
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
