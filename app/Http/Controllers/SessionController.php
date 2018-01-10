<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;


class SessionController extends Controller
{
    //登录页面
    public function create()
    {
        return view('sessions.create');
    }

    //登录验证
    public function store(Request $request)
    {
        //数据认证
        $credentials = $this->validate($request, [
            "email" => "required|email|max:255",
            "password" => 'required'
        ]);
//        dd($credentials);

        //身份认证
        if (Auth::attempt($credentials,$request->has('remember'))) {
            //登录成功
            session()->flash('success', '欢迎回来！');
            //Auth::user()获取当前登录用户信息
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            //登录失败
            session()->flash('danger', '很抱歉，邮箱密码不匹配');
            return redirect()->back();
        }

    }

    //退出
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '成功退出');
        return redirect('login');
    }
}
