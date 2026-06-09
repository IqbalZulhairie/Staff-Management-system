<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class User extends Controller
{
    public function login_proccess(Request $request)
    {
        $usr = $request->input('username');
        $pwd = $request->input('password');

        $user = UserModel::where('u_username', $usr)
                        ->where('u_password', md5($pwd))
                        ->first();

        if(isset($user->u_id))
        {
            $type = $user->u_type;
            $status = $user->u_status;

            if($status == 1) //if user actived
            {
                //set session
                $request ->session()->put('session_id', $user->u_id);
                $request ->session()->put('session_type', $user->u_type );

                if($type == 1) //user as admin
                { 
                    return redirect("/");
                }
                else if($type == 2) //user as clerk
                {
                    return redirect("/clerk");
                }

            }
            else
            {
                return redirect('/login')->with('error_msg', 'User Account <b>' .$usr. '</b> not active');
            }
        }
        else
        {
            return redirect('/login')->with('error_msg', 'Invalid Username and Password !!!');

        }
    }

    public function signup_proccess(Request $request)
    {   
        //table user
        $user = new UserModel;

        $check_data = $user->where('u_username',$request->input('username'))
                            ->first();

        if(!isset($check_data->u_id)) //username not exist
        {
            //insert name
            $user->u_name = $request->input('name');
            //insert username
            $user->u_username = $request->input('username');
            //insert password
            $user->u_password = md5($request->input('password')); 
            //insert type as clerk
            $user->u_type = 2;
            //insert status as not active
            $user->u_status = 0;
            //save command
            $user->save();

            return redirect('/success_register')->with('success_msg', 'Your registration has been successfully registered');
        }
        else
        {
            return redirect('/register')->ith('error_msg', 'User <b>'.$request->input('username').'</b> already exists. Please try again');
        }
    }

    public function home()
    {
        //select all data from database
        $user = UserModel::all();
        $data_arr['data'] = $user;

        return view('user.home', $data_arr);
    }

    public function edit($id, Request $request)
    {
        $user = UserModel::find($id);
        $data['d']=$user;
        $arr_type = ['1'=>'Admin', '2'=>'Clerk'];
        $arr_status = ['Not Active', 'Active'];

        $data['opt_type'] = $this->select_option($arr_type,$user->u_type);
        $data['opt_status'] = $this->select_option($arr_status,$user->u_status);
        
        return view('user.edit', $data);
    }

    private function select_option($arr,$selected_id)
    {
        $opt = '';
        if(sizeof($arr)>0)
        {
            foreach($arr as $k=>$v)
            {
                $slt_opt = $k==$selected_id ? 'selected="selected"' : '';
                $opt.='<option value="'.$k.'"'.$slt_opt.'>'.$v.'</option>';
            }
        }
        return $opt;
    } 

    public function update($id, Request $request)
    {
        $user = UserModel::find($id);
        $user->u_name = $request->name;
        $user->u_username = $request->username;
        $user->u_type = $request->type;
        $user->u_status = $request->status;

        $user->update();
        return redirect('/user');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['session_id', 'session_type']);

        return redirect('/login')->with('success_msg', 'Successfully Logout From System !!!');
    }
}
