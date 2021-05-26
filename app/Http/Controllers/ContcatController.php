<?php

namespace App\Http\Controllers;

use App\Models\Contcat;
use Illuminate\Http\Request;

class ContcatController extends Controller
{

    public function index()
    {
        $contcats = Contcat::all();

        return view('contcat.index',compact('contcats'));
    }


    public function create()
    {
        return view('contcat.create');
    }



    public function store(Request $request)
    {
        $contcat = new Contcat;
        
        $contcat->LName = $request->LName;
        $contcat->FName = $request->FName;
        $contcat->Email = $request->Email;
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
