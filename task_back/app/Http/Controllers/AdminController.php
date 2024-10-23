<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Employees;
use App\Models\project;
use App\Models\Task;

class AdminController extends Controller
{
    public function create(){
        
        $password = Str::password(12, true, true, true, false);
        $employees = DB::table('employees')->pluck('email');
   
            foreach ($employees as $email) {
                Employees::firstOrCreate(
                    ['email' => $email],
                    [
                        'name' => 'Данилл',
                        'email' => 'daniil.kondratev.37@gmail.com',
                        'role' => 'executor',
                        'password' => $password, 
                    ]
                );
               
    } dump($employees);
}
    public function update_role(){
        $employees = Employees::all();
        $employees->update([
            'role' => ''
        ]);
    }
}
