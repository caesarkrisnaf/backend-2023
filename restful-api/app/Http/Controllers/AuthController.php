<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //menangkap inputan
        $input = [
            'name' => $request->name,
            'username' => $request->username,
            'email' =>$request->email,
            'password'=> Hash::make($request->password)
        ];

        $user = User::create($input);

        $data = [
            'message' => 'User is created Succesfully'
        ];

        //mengirim response ke json
        return response()->json($data,200);

    }

    public function login(Request $request)
    {
        //menangkap input user 
        $input = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //mengambil data user (DB)
        $user = User::where('email',$input['email'])->first();

        //membandingkan input user dengan data user(DB)
        $isLoginSuccessfully = (
            $input['email'] == $user->email
            &&
            Hash::check($input['password'], $user->password)

        );

        if($isLoginSuccessfully){
            //memebuat token
            $token = $user->createToken('auth_token');
            $data = [
                'message' => 'Login Succesfully',
                'token' => $token->plainTextToken
            ];

            //mengembalikan response json
            return response()->json($data, 200);
        } else {
            $data = [
                'message' => 'username or password is wrong'
            ];
            
            return response()->json($data, 401);
        }
    }
}
