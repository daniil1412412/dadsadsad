<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\project;
use App\Models\Task;


class ProjectController extends Controller
{
    public function project(){
        $project =  project::all();
        return $project;
      }
}
