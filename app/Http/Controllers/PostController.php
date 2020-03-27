<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use File;
use Image;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Post::all();
        $category = Category::get();
        return view('post.index', \compact('post','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('name', 'ASC')->get();
        return view('post.create', \compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'category_id'=>'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'description'=>'required'
        ]);

        // echo 'gw ganteng';
       
        try{
            $photo = null;
            if($request->hasFile('images')){
                $photo = $this->saveFile($request->name, $request->file('images'));
            }

            //simpan data ke dalam table products
            $post = Post::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'images' => $photo,
                'description'=> $request->description
            ]);
            // dd($post);
            return \redirect(route('post.index'))->withSuccess('Berhasil', $request->name);
        } catch(\Exception $e ){
            return \redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    private function saveFile($name, $photo)
    {
        $images = str_slug($name) . time() . '.' . $photo->getClientOriginalExtension();
        $path = public_path('uploads/post');

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        } 
        Image::make($photo)->save($path . '/' . $images);
        return $images;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        \abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $category = Category::orderBy('name','DESC')->get();
        return view('post.edit', \compact('category','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'category_id'=>'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'description'=>'required'
        ]);

        try{
            $post = Post::findOrFail($id);
            $images = $post->images;
            if($request->hasFile('images')){
                !empty($images) ? File::delete(public_path('uploads/post/' . $images)):null;
                $images = $this->saveFile($request->name, $request->file('images'));
            }
            $post->update([
                'name' => $request->name,
                'category_id'=> $request->category_id,
                'images' => $images,
                'description'=> $request->description
            ]);
            return redirect()->route('post.index')->with('Success');
        } catch(\Exception $e){
            return redirect()->back()->with('Error', $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if(!empty($post->images)){
            File::delete(\public_path('uploads/post/' . $post->images));
        }
        $post->delete();
        return \redirect()->back()->withSuccess('Delete Success');
    }
}
