<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\project;
use App\Models\Task;

class EmployeesController extends Controller
{
    public function project(){
        $project =  project::all();
        return $project;
      }

    public function update_task(){
        $status = project::all();
        $status->update([
            'status' => ''
        ]);
    }
}
