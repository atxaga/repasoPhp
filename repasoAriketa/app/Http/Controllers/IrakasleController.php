<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class IrakasleController extends Controller
{
    public function index()
    {
        
        if (auth()->user()->rola == 0) {
            return response()->json(['error' => 'Baimenak ez dituzu, irakaslea izan behar zera'], 403);
        }

        $erabiltzaileak = User::all();
        $ikasleak = [];
        foreach ($erabiltzaileak as $erabiltzailea) {
            if ($erabiltzailea->rola == 0) {
                $ikasleak[] = $erabiltzailea;
            }
        }
        return view('ikasleak', compact('ikasleak'));
    }
}
