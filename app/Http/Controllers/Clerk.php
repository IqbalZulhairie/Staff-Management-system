<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\StaffModel;

class clerk extends Controller
{
    public function submit(Request $request)
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
            return redirect('/clerk')->with('error_msg', 'Staff Number <b>'.$request->number.'</b> already exist');
        }
        else
        {
            $staff->save();
            return redirect('/clerk')->with('success_msg', 'Staff Info With Number <b>'.$request->number.'</b> Successfully Saved!!!');
        }

    }
}
