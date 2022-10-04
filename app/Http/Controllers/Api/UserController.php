<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use UserStore;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $listUsername = User::pluck('email')->toArray();
        if(in_array($data['email'],$listUsername)){
            return response()->json([
                'errorCode' => 500,
                'errorMsg' => 'Tài khoản tồn tại'
            ]);
        }
        $user = User::create($data);
        if($user){
            return response()->json([
                'errorCode' => 200,
                'errorMsg' => 'Đăng kí thành công'
            ]);
        }
        return response()->json([
            'errorCode' => 500,
            'errorMsg' => 'Đăng kí thất bại'
        ]);
    }

    public function login(Request $request){
        $data = $request->all();
        $users = User::all();
        foreach($users as $user){
            if($user->email == $data['email'] && $user->password == $data['password']){
                session()->put('is_login',$user->id);
                return response()->json([
                    'errorCode' => 200,
                ]);
            }
        }
        return response()->json([
            'errorCode' => 500,
            'errorMsg' => 'Tài khoảng hoặc mặt khẩu không chính xác'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
