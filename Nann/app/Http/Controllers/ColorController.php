<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\DataTables\ColorDataTable;
use DataTables;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all();
        return view('backend.colors.index',compact('colors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required',
            'photo' => 'required'
        ]);

         //upload image
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/colorimg'),$imageName);
        $myfile = 'backend/colorimg/'.$imageName;

        $color = new Color;
        $color->name = $request->name;
        $color->photo = $myfile;

        // dd($color);
        $color->save();

        //redirect
        return redirect()->route('colors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::find($id);
        return view('backend.colors.edit',compact('color'));
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
        $request->validate([
            'name' => 'required',
            'photo' => 'required'
        ]);

        if ($request->hasFile('photo')){
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/colorimg'),$imageName);
        $myfile = 'backend/colorimg/'.$imageName;

        unlink($request->oldphoto);

        }else{
            $myfile = $request->oldphoto;
        }

        $color = Color::find($id);
        $color->name = $request->name;
        $color->photo = $myfile;

        $color->save();

        //redirect
        return redirect()->route('colors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        unlink($color->photo);
        //redirect
        return redirect()->route('colors.index');
    }
}
