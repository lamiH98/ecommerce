<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
use Auth;
use App\User;

class AuthController extends Controller
{

    use GeneralTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $this->sendResponse('users', $users, 'All Users');
    }

    public function userAddress($id) {
        $user = User::find($id);
        $userAddress = $user->Address;
        return $this->sendResponse('userAddress', $userAddress);
    }
<<<<<<< HEAD

    public function getUser() {
        $user = Auth::guard('user-api')->user();
=======
    
    public function getUser(Request $request) {
        $user = Auth::guard('api')->user();
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
        return $this->sendResponse('user', $user);
    }

    public function login(Request $request) {

        try {
            $rules = [
                "email" => "required",
                "password" => "required"
            ];

            $validator = Validator::make($request->all(), $rules);
            //login
<<<<<<< HEAD
=======

>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
            $credentials = $request->only(['email', 'password', 'device_token']);

            $token = Auth::guard('user-api')->attempt($credentials);  //generate token

            if (!$token)
<<<<<<< HEAD
                return $this->sendError($token);
=======
                return response()->json('status', 'بيانات الدخول غير صحيحة');
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f

            $user = Auth::guard('user-api')->user();
            $user->api_token = $token;
            //return token
            return $this->sendResponse('user', $user, 'User');  //return json response

        } catch (\Exception $ex) {
<<<<<<< HEAD
            return sendError($ex->getMessage());
=======
            return response()->json($ex->getMessage());
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
        }
    }

    public function register(Request $request) {
        try {
            $rules = [
                'name'  => 'required',
                "email" => "required",
                "password" => "required",
            ];
            $validator = Validator::make($request->all(), $rules);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'device_token' => $request->device_token
            ]);

<<<<<<< HEAD
            $credentials = $request->only(['email', 'password']);
=======
            $credentials = $request->only(['email', 'password', 'device_token']);
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f

            $token = Auth::guard('user-api')->attempt($credentials);  //generate token

            if (!$token)
<<<<<<< HEAD
                return $this->returnError('E001', 'بيانات الدخول غير صحيحة');
=======
                return response()->json('status', 'بيانات الدخول غير صحيحة');
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f

            $user = Auth::guard('user-api')->user();
            $user->api_token = $token;

<<<<<<< HEAD
=======
            // $user = User::first();
            // $token = JWTAuth::fromUser($user);
            // return $this->sendResponse('user', $user, 'User');
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
            return $this->sendResponse('user', $user, 'User');  //return json response
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage());
        }
    }

    public function logout(Request $request) {
        $token = $request->header('auth-token');
<<<<<<< HEAD
        if($token) {
            try {
                JWTAuth::setToken($token)->invalidate(); //logout
            }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
                return  $this->returnError('','some thing went wrongs');
            }
            return $this->returnSuccessMessage('Logged out successfully');
        } else {
            $this->returnError('','some thing went wrongs');
=======
        if($token){
            try {
                JWTAuth::setToken($token)->invalidate(); //logout
            }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
                return response()->json('status', 'some thing went wrongs');
            }
            return $this->returnSuccessMessage('Logged out successfully');
        }else{
            return response()->json('status', 'some thing went wrongs');
>>>>>>> 2381c3773d64648a3e592ce3dad493e5e041b35f
        }
    }

}
