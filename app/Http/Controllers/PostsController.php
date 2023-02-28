<?php

namespace App\Http\Controllers;

// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use Illuminate\View\View;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    

    public function main(): View//: Response
    {   
       
        $pruebas = DB::table('pruebas')->get();
        dd($pruebas);
        // return view('blog.main', ['pruebas' => $pruebas]);
        
    
         return view('blog.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()//: Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//: RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)//: Response
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)//: Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//: RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//: RedirectResponse
    {
        //
    }
}
