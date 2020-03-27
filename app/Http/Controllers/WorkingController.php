<?php

namespace App\Http\Controllers;

use App\Working;
use Illuminate\Http\Request;

class WorkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $w['working'] = Working::all();
        return view('working.index', $w);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('working.create');
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
            'name'=> 'required',
            'hour'=>'required'
        ]);

        try{
            $work = Working::create([
                'name' => $request->name,
                'hour' => $request->hour
            ]);
            // dd($work);
            return redirect()->route('working.index')->withSuccess('success');
        } catch(\Exception $e){
            return redirect()->back()->with('Erro', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Working  $working
     * @return \Illuminate\Http\Response
     */
    public function show(Working $working)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Working  $working
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $working = Working::findOrFail($id);
        return view('working.edit', \compact('working'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Working  $working
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=> 'required',
            'hour'=>'required'
        ]);

        try{
            $working = Working::findOrFail($id);
            $working->update([
                'name'=>$request->name,
                'hour'=>$request->hour
            ]);
            return \redirect()->route('working.index')->withSuccess('UpdateDone');
        } catch(\Exception $e){
            return \redirect()->back()->withFail('Error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Working  $working
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Working::findOrFail($id);
        $work->delete();
        return redirect()->back()->withSuccess('DeleteDone');
    }
}
