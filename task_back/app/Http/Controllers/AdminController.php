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
    public function regist(Request $request){

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
        return ['token' => $employees->createToken($request->password)->plainTextToken];
    
}
public function update_role(Request $request, $employee_id) {
    $pp = Employees::find($employee_id);
    $pp->update([
        'role' => $request->role,
    ]);
    return view('update_role');
    return ['token' => $employees->createToken($request->role)->plainTextToken];
}

}
