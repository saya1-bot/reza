<?php

namespace App\Http\Controllers;

use App\models\Pemograman;
use Illuminate\Http\Request;

class PemogramanController extends Controller
{
    public function index(){
        $pemograman = Pemograman::all();
        return view('pemograman.index', compact('profile'));
    }

    public function create()
    {
        return view('pemograman.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Pemograman::create($request->except(['_token','submit']));
        return redirect('/pemograman');
    }

    public function edit($id)
    {
        $pemograman = Pemograman::find($id);
        return view('pemograman.edit',compact(['pemograman']));
    }

    public function update($id, Request $request)
    {
        $pemograman = Pemograman::find($id);
        $pemograman->update($request->except(['_token','submit']));
        return redirect('/pemograman');
    }

    public function destroy($id)
    {
        $pemograman = Pemograman::find($id);
        $pemograman->delete();
        return redirect('/pemograman');
    }
}
