<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\project;
use App\Models\Task;


class TaskController extends Controller
{
    public function task(){
        $task = Task::all();
        return $task;
    }
}
