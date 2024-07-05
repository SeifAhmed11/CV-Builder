<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = auth()->user()->experiences;

        return view('experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'state' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        // $formData = $request->except('_token');

        auth()->user()->experiences()->create($formData);

        return redirect()->route('experiences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function show(Experiences $experiences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function edit(Experiences $experiences)
    {
        $e = $experiences->where('user_id', auth()->id())->firstOrFail();
        return view('experience.edit', compact('e'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experiences $experiences)
    {
        $e = $experiences->where('user_id', auth()->id())->firstOrFail();

        $request->validate([
            'job_title' => 'required',
            'employer' => 'required',
            'city' => 'required',
            'state' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $e->update($request->only([
            'job_title', 'employer', 'city', 'state', 'start_date', 'end_date'
        ]));
        
        // return $e;
        return redirect()->route('experiences.index');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experiences  $experiences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experiences $experiences)
    {
        $e = $experiences->where('user_id', auth()->id())->firstOrFail();
        $e->delete();

        return back();    }
}
