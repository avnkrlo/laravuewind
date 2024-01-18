<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerForm(Request $request){
        $valid = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mobile_number' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:16'
        ]);

        DB::beginTransaction();

        try{
            $user = User::create([
                'first_name' => $valid['first_name'],
                'last_name' => $valid['last_name'],
                'mobile_number' => $valid['mobile_number'],
                'email' => $valid['email'],
                'password' => Hash::make($valid['password'])
            ]);

            DB::commit();
            return response()->json(array('message' => 'Account has been registered successfully'), 201);
        }
        catch(Exception $e){
            DB::rollback();
            // return response()->json(array('error' => 'Something went wrong!'), 422);
            return redirect()->back()->withErrors([
                'create' => 'Something went wrong!'
            ]);
        }
    }
}
