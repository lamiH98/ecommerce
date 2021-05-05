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
    
    public function getUser(Request $request) {
        $user = Auth::user();
        $header = $request->header();
        return $this->sendResponse('user', $header);
    }

    public function login(Request $request) {

        try {
            $rules = [
                "email" => "required",
                "password" => "required"
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }

            //login

            $credentials = $request->only(['email', 'password']);

            $token = Auth::guard('user-api')->attempt($credentials);  //generate token

            if (!$token)
                return response()->json('status', 'بيانات الدخول غير صحيحة');

            $user = Auth::guard('user-api')->user();
            $user->api_token = $token;
            //return token
            return $this->sendResponse('user', $user, 'User');  //return json response

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage());
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
            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $credentials = $request->only(['email', 'password']);

            $token = Auth::guard('user-api')->attempt($credentials);  //generate token

            if (!$token)
                return response()->json('status', 'بيانات الدخول غير صحيحة');

            $user = Auth::guard('user-api')->user();
            $user->api_token = $token;

            // $user = User::first();
            // $token = JWTAuth::fromUser($user);
            // return $this->sendResponse('user', $user, 'User');
            return $this->sendResponse('user', $user, 'User');  //return json response
        } catch (\Exception $ex) {
            return response()->json($ex->getMessage());
        }
    }

    public function logout(Request $request) {
        $token = $request->header('auth-token');
        if($token){
            try {
                JWTAuth::setToken($token)->invalidate(); //logout
            }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
                return response()->json('status', 'some thing went wrongs');
            }
            return $this->returnSuccessMessage('Logged out successfully');
        }else{
            return response()->json('status', 'some thing went wrongs');
        }
    }

}
