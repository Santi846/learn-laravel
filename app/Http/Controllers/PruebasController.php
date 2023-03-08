<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Pruebas;


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
        //  $pruebas = DB::table('pruebas')
        // ->where('is_published', true)
        // ->where('id', '>', 60)
        // ->get();

         //get tables where colum values are between
        // $pruebas = DB::table('pruebas')
        // ->whereBetween('min_to_read', [1, 2])
        // ->get();

        //get tables where colums can have different values
        // $pruebas = DB::table('pruebas')
        // ->whereIn('min_to_read', [1, 2, 3])
        // ->get();

        //get tables where colum value is null
        // $pruebas = DB::table('pruebas')
        // ->whereNull('expert')
        // ->get();

        //get tables where colum value is not null
        // $pruebas = DB::table('pruebas')
        // ->whereNotNull('expert')
        // ->get();

        //get tables where selected column has a distinct value from the others tables inside the database
        // $pruebas = DB::table('pruebas')
        // ->select('min_to_read')
        // ->distinct()
        // ->get();

        //get tables ordered by id column in a descending way
        // $pruebas = DB::table('pruebas')
        //default is asc
        // ->orderby('id', 'desc')
        // ->get();

        //get 10 tables, since id value es 32
        // $pruebas = DB::table('pruebas')
        // ->skip(30)
        // ->take(10)
        // ->get();

        //get tables in an random order
        // $pruebas = DB::table('pruebas')
        // ->inRandomOrder()
        // ->get();

        //get one single row
        // $pruebas = DB::table('pruebas')
        // ->where('id', 65)
        // ->first();

        //get one single row with an specific id value
        // $pruebas = DB::table('pruebas')
        // ->find(11);

        //get just the value of a column inside a single row
        // $pruebas = DB::table('pruebas')
        // ->where('id', 15)
        // ->value('Title');

        //  count tables in database
        // $pruebas = DB::table('pruebas')
        // ->count();
        
        //count tables with id grather than 50 in database
        // $pruebas = DB::table('pruebas')
        // ->where('id', '>', 50)
        // ->count();

        //get minimum value of an specific column
        // $pruebas = DB::table('pruebas')
        // ->min('min_to_read');

        //get maximum value of an specific column
        // $pruebas = DB::table('pruebas')
        // ->max('min_to_read');

        //get the sum of all specific column values 
        // $pruebas = DB::table('pruebas')
        // ->sum('min_to_read');

        //get the average of all specific column values
        // $pruebas = DB::table('pruebas')
        // ->avg('min_to_read');
        
        //Print in screen
        // dd($pruebas);

        //get the whole database through tables
        // $pruebas = DB::table('pruebas')->get();

        //return the variable value with the view
        // return view('index')->with('pruebas', $pruebas);

        //get the whole database through tables
        // $pruebas = DB::table('pruebas')->get();
        
        //return data compact in view method
        // return view('index', compact('pruebas'));
        
        //getting whole database data
        // return view('index', [
        //     'pruebas' => DB::table('pruebas')->get()
        // ]);
        
        // $pruebas = Pruebas::orderBy('id', 'desc')->take(5)->get();

        // $pruebas = Pruebas::where('min_to_read', 2 )->get();

        // $pruebas = Pruebas::where('min_to_read', '!=' , 2 )->get();

        // Pruebas::chunk(25, function($pruebas){
        //     foreach ($pruebas as $prueba) {
        //         echo $prueba->title . '<br>';
        //     }
        // });

        // $pruebas = Pruebas::get()->count();

        // $pruebas = Pruebas::sum('min_to_read');

        //view query data with specific order 
        // $pruebas = Pruebas::orderBy('updated_at', 'desc');

        // $pruebas = Pruebas::orderBy('updated_at', 'desc')->get();

        //  dd($pruebas);

        // return view('index');
        

        // return view('index', [
        //     'pruebas' => Pruebas::orderBy('updated_at', 'desc')->get()
        // ]);

        return view('index', [
            'pruebas' => Pruebas::orderBy('id', 'desc')->take(3)->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()//: Response
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)//: RedirectResponse
    {
        //get all request data and show it
        // dd($request->all());
        //to stop executig
        // exit;
        //OOP Method
        // $pruebas = new Pruebas();
        // $pruebas->title = $request->title;
        // $pruebas->expert = $request->expert;
        // $pruebas->body = $request->body;
        // $pruebas->image_path = 'Temporary';
        // $pruebas->is_published = $request->is_published === 'on';
        // $pruebas->min_to_read = $request->min_to_read;
        // $pruebas->save();

        //Eloquent Method

        $request->validate([
            'title' => 'required|unique:pruebas|max:255',
            'expert' => 'required',
            'body' => 'required',
            'image' => ['required', 'mimes:jpg,jpeg,png', 'max:5048'],
            'min_to_read' => 'min:0|max:60',
        ]);
        Pruebas::create([
            'title' => $request->title,
            'expert' => $request->expert,
            'body' => $request->body,
            'image_path' => $this->storeImage($request),
            'is_published' => $request->is_published === 'on',
            'min_to_read' => $request->min_to_read,
        ]);

        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)//: Response
    {
        // return $id;
        // $pruebas = Pruebas::findOrFail($id);

        // dd($pruebas);

        return view('show', [
            'pruebas' => Pruebas::findOrFail($id)   
        ]);
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

    private function storeImage($request){

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        return $request->image->move(public_path('images'), $newImageName);
    }
}
