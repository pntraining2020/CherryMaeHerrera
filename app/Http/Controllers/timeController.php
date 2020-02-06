<?php

namespace App\Http\Controllers;
use App\Name;
use Illuminate\Http\Request;

class timeController extends Controller
{
    public function store(Request $request)
    {
        $student = new Name([
            'name' => $request('selected'),
            'clock_in' => $request('clock_in'),
            'clock_out' => $request('clock_out'),
        ]);
        $student->save();


    }
}