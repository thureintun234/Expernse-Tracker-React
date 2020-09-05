<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Subcategory;
use App\Color;
use App\Size;
use App\Brand;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('backend.items.create',compact('brands','subcategories','categories','colors','sizes'));
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
            'codeno' => 'required|min:4',
            'name'  => 'required',
            'photo1' => 'required',
            'photo2' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'subcategory' => 'required'
        ]);

        //image file upload 1
        $imageName1 = time().'.'.$request->photo1->extension();

        $request->photo1->move(public_path('backend/itemimg'),$imageName1);
        $myfile1 = 'backend/itemimg/'.$imageName1;

        //image file upload 2
        $imageName2 = time().'.'.$request->photo2->extension();

        $request->photo2->move(public_path('backend/itemimg2'),$imageName2);
        $myfile2 = 'backend/itemimg2/'.$imageName2;


        //data insert
        $item = new Item;
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->photo1 = $myfile1;
        $item->photo2 = $myfile2;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;

        $item->save();

        $colors = $request->colors;
        for ($i=0; $i < count($colors); $i++) { 
            $item->colors()->attach($colors[$i]);
        }

        $sizes = $request->sizes;
        for ($i=0; $i < count($sizes); $i++) { 
            $item->sizes()->attach($sizes[$i]);
        }


        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('backend.items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        $item = Item::find($id);
        $colors = Color::all();
        $sizes = Size::all();
        return view('backend.items.edit',compact('categories','brands','subcategories','item','colors','sizes'));
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
            'codeno' => 'required|min:4',
            'name'  => 'required',
            'photo1' => 'required',
            'photo2' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'subcategory' => 'required'
        ]);

        //old photo1 upload and delete
        if ($request->hasFile('photo1')){
            //image file upload 1
        $imageName1 = time().'.'.$request->photo1->extension();

        $request->photo1->move(public_path('backend/itemimg'),$imageName1);
        $myfile1 = 'backend/itemimg/'.$imageName1;

            //delete old photo1
            unlink($request->oldphoto1);

        }else{
            $myfile = $request->oldphoto1;
        }


        //oldphoto 2 upload and delete

        if ($request->hasFile('photo2')){
           //image file upload 2
        $imageName2 = time().'.'.$request->photo2->extension();

        $request->photo2->move(public_path('backend/itemimg2'),$imageName2);
        $myfile2 = 'backend/itemimg2/'.$imageName2;

            //delete old photo2
            unlink($request->oldphoto2);

        }else{
            $myfile = $request->oldphoto2;
        }

        //data insert
        $item = Item::find($id);
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->photo1 = $myfile1;
        $item->photo2 = $myfile2;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;

        $item->save();

        $colors = $item->colors()->where('item_id',$id)->detach();
        $sizes = $item->sizes()->where('size_id',$id)->detach();

        $colors = $request->colors;
        for ($i=0; $i < count($colors); $i++) { 
            $item->colors()->attach($colors[$i]);
        }

        $sizes = $request->sizes;
        for ($i=0; $i < count($sizes); $i++) { 
            $item->sizes()->attach($sizes[$i]);
        }


        return redirect()->route('items.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        // dd($id);
        $item = Item::find($id);
        $colors = $item->colors()->where('item_id',$id)->detach();
        $sizes = $item->sizes()->where('size_id',$id)->detach();

        $item->delete();
        unlink($item->photo1);
        unlink($item->photo2);


        //redirect
        return redirect()->route('items.index');
    }

    
}
