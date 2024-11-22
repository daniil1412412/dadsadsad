<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class SupervisorController extends Controller
{
    public function create_project(Request $request){
        $validate = $request->validate([
            'name' => 'required|unique:projects|min:3',
            'project_desc' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required',
            'remainder' => 'required',
        ]);
        project::create([
            'name' => $request->name,
            'project_desc' => $request->project_desc,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
            'remainder' => $request->remainder,
        ]);
        dd('ловаыва');
        return view('prjct');
        return ['token' => $project->createToken($request->aa)->plainTextToken];
    }
}
