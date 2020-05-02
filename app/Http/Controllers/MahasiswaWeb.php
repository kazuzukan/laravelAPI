<?php

namespace App\Http\Controllers;


use App\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaWeb extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show All data

        // return mahasiswa::all();  

        $data = mahasiswa::all();  
        return view('list', ["data" => $data]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //Create Data mahasiswa
        return mahasiswa::create($request->all());

        // return response()->json([
        //     'status' => 'Sukses',
        //     'message' => 'Data berhasil di input bro!'
        // ], 200);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show mahasiswa with id
        return response()->json(['data' => mahasiswa::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $name = $request->name;
        $hobby =  $request->hobby;
        //update mahasiswa
        // mahasiswa::find($id)->update($request->all());
        
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->name =$name;
        $mahasiswa->hobby =$hobby;
        $mahasiswa->save();

        return response()->json([
            'status' =>'updated',
            'message' => 'Data updated masbro!'
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete mahasiwa
        mahasiswa::destroy($id);
        return response()->json([
            'status' =>'dele    ted',
            'message' => 'Data deleted masbro!'
        ], 200);
    }
}
