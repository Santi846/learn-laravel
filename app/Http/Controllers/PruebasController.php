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

    

    public function index():View
    {   
        
        //get all tables from database
        // $pruebas = DB::statement('SELECT * FROM pruebas');

        //get one single row from database
        // $pruebas = DB::select('SELECT * FROM pruebas WHERE id = 1');
        
        //get one single row from database in a specific way
        // $pruebas = DB::select('SELECT * FROM pruebas WHERE id = :id', ['id' => 1]);

        //insert one single row in database
        // $pruebas = DB::insert('INSERT INTO pruebas (title, expert, body, image_path, is_published, min_to_read) VALUES(?, ?, ?, ?, ?, ?)', [
        //     'Test', 'test', 'test', 'test', true, 1
        // ]);
        
        //update one single row in database
        // $pruebas = DB::update('UPDATE pruebas set body = ? WHERE id = ?', [
        //     'My perfect body', 23
        // ]);
        
        //delete one single row from database
        // $pruebas = DB::delete('DELETE FROM pruebas where id = ?', [24]);

        //get the whole database through tables
        // $pruebas = DB::table('pruebas')->get();
        
        //select specific columns from all rows
        // $pruebas = DB::table('pruebas')
        // ->select('title','body')
        // ->get();
        
        //get tables which id is geater than 50
        // $pruebas = DB::table('pruebas')
        // ->where('id','>', 50)
        // ->get();

        //get tables which id is equal to 50
        // $pruebas = DB::table('pruebas')
        // ->where('id', 50)
        // ->get();

        //get tables which is_published is equal to true
        // $pruebas = DB::table('pruebas')
        // ->where('is_published', true)
        // ->get();

        //get tables through multiple conditions
         $pruebas = DB::table('pruebas')
        ->where('is_published', true)
        ->where('id', '>', 60)
        ->get();

        dd($pruebas);

        return view('index');
        
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
