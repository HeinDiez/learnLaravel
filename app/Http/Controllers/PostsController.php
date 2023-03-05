<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        return 'Its working ' . $id;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return 'create is here';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        return 'this is the show method '. $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function contact() 
    {

        $name = 'hein';

        $people = ['hein', 'heilley', 'rhuba'];

        return view('contacts', compact('people', 'name'));
    }

    public function show_post ($id) 
    {
        $name = 'hein';
        // return view('post')->with('id', $id);

        return view('post', compact('id', 'name'));
    }
}
