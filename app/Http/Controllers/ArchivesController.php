<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archives;

class ArchivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Archives = Archives::all();
        return view('archives.index', compact('Archives'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archives.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"require|min:3",
            "description"=>"require|min:20",
            "price"=>"require|numbers"

        ]);
        $data = $request->all();


        $newComic= new Archives();
        $newComic->fill($data);
      /*   $newComic->title = $data['title'];
        $newComic->description=$data['description'];
        $newComic->thumb=$data['thumb'];
        $newComic->price=$data['price'];
        $newComic->series=$data['series'];
        $newComic->sale_date=$data['sale_date'];
        $newComic->type=$data['type']; */
        $newComic->save();

        return redirect()->route("Archives.show", $newComic->id);
      /*   return $newComic; */
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Archives = Archives::findOrFail($id);

        return view("archives.show", compact("Archives"));
        //
    }
   /*  public function show(Archives $Archives)
    {
        return view("archives.show", compact("Archives"));
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       /*  $Archives = Archives::findOrFaild($id);
        return view("Archives.edit", compact("Archives")); */
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
