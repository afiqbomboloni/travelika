<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PlaceRequestStore;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('admin.place.index', compact('places'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.place.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlaceRequestStore $request)
    {
        $input = $request->all();
        if($request->hasFile('image')) {
            $destination_path = 'public/images/places';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }

        $places = Place::create($input);
        if($request->has('categories')) {
            $places->categories()->attach($request->categories);
        }

        return to_route('admin.places.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Place $place)
    {
        $categories = Category::all();
        return view('admin.place.edit', compact('place', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $input =$request->all();
        if($request->hasFile('image'))
        {
            Storage::delete($category->image);
            $destination_path = 'public/images/places';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);

            $input['image'] = $image_name;
        }

        
        $place->update($input);
        if($request->has('categories')) {
            $place->categories()->sync($request->categories);
        }

        return to_route('admin.places.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        Storage::delete($place->image);
        $place->delete();

        
        return to_route('admin.places.index');
    }
}
