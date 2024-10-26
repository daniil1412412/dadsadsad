<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Employees;
use App\Models\project;
use App\Models\Task;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AdminController extends Controller
{
    public function create(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'role' => 'required',
            'password' => 'required',
        ]);
            
        Employees::create([
            'name' => $request->name, 
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);        
        dd('ловаыва');
        return view('test');
        return ['token' => $employees->createToken($request->aa)->plainTextToken];
    
}
    public function update_role(){
        $employees = Employees::all();
        $employees->update([
            'role' => ''
        ]);
    }
}
