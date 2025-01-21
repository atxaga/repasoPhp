<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulua;

class ModuluController extends Controller
{
    
    public function index()
{
    $moduluak = Modulua::all(); 
    return view('moduluak', compact('moduluak'));
}

public function store(Request $request)
{
    $request->validate([
        'izena' => 'required|string|max:255',
        'gela' => 'required|string|max:255',
    ]);

    Modulua::create($request->all());

    return redirect()->route('moduluak.index');
}

public function edit($id)
{
    $modulo = Modulua::findOrFail($id);
    return view('edit', compact('modulo'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'izena' => 'required|string|max:255',
        'gela' => 'required|string|max:255',
    ]);

    $modulo = Modulua::findOrFail($id);
    $modulo->update($request->all());

    return redirect()->route('moduluak.index');
}

public function destroy($id)
{
    $modulo = Modulua::findOrFail($id);
    $modulo->delete();

    return redirect()->route('moduluak.index');
}

}


