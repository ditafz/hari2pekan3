<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//IMPORT DATABASENYA
use DB;

class PertanyaanController extends Controller
{

	public function index(){
		$questions = DB::table('questions')->get(); //get = select dalam query
		//dd($pertanyaan);
    	return view('pertanyaan.index', compact('questions'));
    }

    public function create(){
    	return view('pertanyaan.createpertanyaan');
    }

    public function store(Request $request){
    	//dd($request->all());

    	$questions = DB::table('questions')->insert([
    		'judul' => $request['judul-pertanyaan'], 
    	 	'isi' => $request['isi-pertanyaan']]
		);

    	$request->validate([
	        'judul' => 'required|unique:posts|max:255',
	        'isi' => 'required',
    	]);

		return redirect('/pertanyaan');
    }

    public function show($pertanyaan_id){
    	$questions = DB::table('questions')->where('id', $pertanyaan_id)->first();
    	//dd($question);
    	return view('pertanyaan.show', compact('questions'));
    }

    public function edit($pertanyaan_id){
    	$questions = DB::table('questions')->where('id', $pertanyaan_id)->first();
    	return view('pertanyaan.edit', compact('questions'));
    }

    public function update($pertanyaan_id, Request $request){

    	$request->validate([
	        'judul' => 'required|unique:posts|max:255',
	        'isi' => 'required',
    	]);

    	$questions = DB::table('questions')
              ->where('id', $pertanyaan_id)
              ->update([
              	'judul' => $request['judul'],
              	'isi' => $request['isi']
          		]);
        return redirect('/pertanyaan');
    }


    public function destroy($pertanyaan_id){
    	$questions = DB::table('questions')->where('id', $pertanyaan_id)->delete();

    	return redirect('/pertanyaan');
    }

}
