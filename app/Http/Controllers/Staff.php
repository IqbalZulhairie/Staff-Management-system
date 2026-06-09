<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffModel;

class Staff extends Controller
{
    public function index()
    {
        $staff = StaffModel::all();
        $data_arr['data']=$staff;

        return view('staff.list', $data_arr);
    }

    public function create()
    {
        return view('/staff.form');
    }

    public function store(Request $request)
    {
        $staff = new StaffModel;
        $staff->s_name = $request->name;
        $staff->s_number = $request->number;
        $staff->s_phone = $request->phone;
        $staff->s_email = $request->email;
        $staff->s_address = $request->address;

        //check existing data based on staff number
        $d = $staff->where('s_number', $request->number)
                    ->first();

        if(isset($d->s_id))
        {
            return redirect('/staff/create')->with('error_msg', 'Staff Number <b>'.$request->number.'</b> already exist');
        }
        else
        {
            $staff->save();
            return redirect('/')->with('success_msg', 'Staff Info With Number <b>'.$request->number.'</b> Successfully Saved!!!');
        }

    }

    public function edit($id)
    {
        $staff = StaffModel::find($id);
        $data['d']=$staff;

        return view('staff.edit', $data);
    }

    public function update($id,Request $request)
    {
        $staff = StaffModel::find($id);

        $staff->s_name = $request->name;
        $staff->s_number = $request->number;
        $staff->s_phone = $request->phone;
        $staff->s_email = $request->email;
        $staff->s_address = $request->address;
        $staff->update();

        return redirect('/');
    }

    public function destroy($id)
    {
        $staff = StaffModel::find($id);
        $staff->delete();
        return redirect('/');
    }
}
