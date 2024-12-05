<?php

namespace App\Http\Controllers;

use Log;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{

    /**
     * Register a newly created resource in storage.
     */
    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password)
            ]);
            
            if ($user) {
                return ResponseHelper::success(message: 'User has been registered successfully', data:$user, statusCode:201);
            }
            return ResponseHelper::error(message: 'Unable to register user, try again later', statusCode:400);
        } catch (Exception $e) {
            Log::error('Unable to register user: '. $e->getMessage());
            return ResponseHelper::success(message: 'User has been registered successfully', statusCode:400);
        }
    }

    /**
     * Login the specified resource in storage.
     */
    public function login(RegisterRequest $request)
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
