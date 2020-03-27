<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
// use Alert;
// use Validate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['category'] = Category::all();
        return view('category.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Category::create($request->all());
        $d = New Category;
        $d->name = $request->name;
        $d->save();
        // Alert::message('Thanks for comment!')->persistent('Close');

        return redirect()->route('category.index')->withSuccess('success');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrfail($id);
        return view('category.edit', \compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        try{
            $category = Category::findOrfail($id);
            $category->update([
                'name' => $request->name
            ]);
            return redirect()->route('category.index')->withSuccess('Succes Update');
        } catch(\Exception $e){
            return \redirect()->back()->withFail('Error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrfail($id);
        $category->delete();
        return \redirect()->route('category.index')->withSuccess('success', $category->name);
    }
}
