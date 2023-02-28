<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;


class PruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    

    public function main():View
    {
        $pruebas = DB::table('pruebas');

        return view('blog.main', ['pruebas' => $pruebas]);
        
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
