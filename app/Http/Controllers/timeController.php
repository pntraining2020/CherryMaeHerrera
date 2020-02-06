<?php

namespace App\Http\Controllers;
use App\Name;
use Illuminate\Http\Request;

class timeController extends Controller
{
    public function store(Request $request)
    {
        $student = new Name([
            'name' => $request->get('selected'),
            'clock_in' => $request->get('clock_in'),
            'clock_out' => $request->get('clock_out'),
        ]);
        $student->save();


    }
}