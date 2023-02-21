<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{

    protected $rules =
    [
        'title' => 'required|string|min:2|max:200',
        'description' => 'required|min:2|max:200',
        'category' => 'required|min:2|max:100',
        'year' => 'required|integer|between:1950,2023',
        'technology_used' => 'min:2',
        'thumb' => 'required|url|min:5',
    ];

    protected $messages = [

        'title.required' => 'E\' necessario inserire un titolo',
        'title.min' => 'Il titolo deve contenere almeno 2 caratteri',
        'title.max' => 'Il titolo non può essere più lungo 200',

        'description.required' => 'E\' necessario inserire una descrizione',
        'description.min' => 'La descrizione deve contenere almeno 2 caratteri',
        'description.max' => 'La descrizione può essere più lungo 200 caratteri',

        'category.required' => 'Inserisci una almeno una categoria',
        'category.min' => 'Il numero di caratteri deve essere almeno di due',

        'year.required' => 'Inserisci un anno corretto',

        'technology_used.min' => 'Il numero di caratteri deve essere almeno di due',

        'thumb.required' => 'Inserisci un link per la tua immagine',
        'thumb.url' => 'Inserisci una URL valido per la tua immagine',
        'thumb.min' => 'La tua immagine deve contenere almeno 5 caratteri',

        
    ];




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view( "admin.projects.index",  compact("projects"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $formData = $request->all();
        $request->validate($this->rules, $this->messages);
        $newProject = new Project();
        $newProject->fill($formData);


        $newProject->save();

        return redirect()->route("admin.projects.show", $newProject->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
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

        $formData = $request->all();
        $request->validate($this->rules, $this->messages);
        $project = Project::findOrFail($id);
        $project->update($formData);

        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }
}
