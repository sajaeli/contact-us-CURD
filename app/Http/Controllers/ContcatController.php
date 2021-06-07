<?php

namespace App\Http\Controllers;

use App\Models\Contcat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContcatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $contcats = Contcat::where('users_id', Auth::user()->id)->get();

        return view('contcat.index',compact('contcats'));
    }


    public function create()
    {
        return view('contcat.create');
    }



    public function store(Request $request)
    {

        $request->validate([
            'LName'    => 'required',
            'FName'    => 'required',
            'Email'    => 'required',
        ]);

        $contcat = new Contcat;
        
        $contcat->LName    = $request->LName;
        $contcat->FName    = $request->FName;
        $contcat->Email    = $request->Email;
        $contcat->users_id = Auth::user()->id;
        $contcat->save();

        return redirect()->route('contcat.index');
    }



    public function edit($id)
    {
        $contcat = Contcat::find($id);
        return view('contcat.edit',compact('contcat'));
    }



    public function update(Request $request ,$id)
    {

        $request->validate([
            'LName'    => 'required',
            'FName'    => 'required',
            'Email'    => 'required',
        ]);

        $contcat = Contcat::find($id);

        $contcat->update([
            'LName' => $request->LName,
            'FName' => $request->FName,
            'Email' => $request->Email,
        ]);

        return redirect()->route('contcat.index');
    }


    public function destroy($id)
    {
        $contcat = Contcat::find($id);
        $contcat->delete();
        return redirect()->route('contcat.index');
    }

}
