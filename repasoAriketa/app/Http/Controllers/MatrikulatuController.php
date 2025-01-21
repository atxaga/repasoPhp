<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Modulua;

class MatrikulatuController extends Controller
{
 
    public function showView()
    {
       
        $user = auth()->user();

       
        $moduluak = $user->moduluak;  

        return view('ikaslea', compact('moduluak'));
    }

    public function matrikulatu($moduloId)
    {
        
        if (auth()->user()->role != 0) {
            return response()->json(['error' => 'No tienes permisos para matricularte'], 403);
        }

        
        $modulo = Modulua::find($moduloId);

        
        auth()->user()->moduluak()->attach($modulo);

        return redirect()->back();
    }
}

