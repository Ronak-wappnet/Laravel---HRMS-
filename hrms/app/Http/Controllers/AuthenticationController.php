<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{   
    function empRegistration(Request $request)
    {
        $emp=new Employee();
        $emp->emp_name = $request['name'];
        $emp->emp_email = $request['email'];
        $emp->password = $request['password'];        
        $emp->save();
        return redirect('login');
    }

    function empLogin(Request $request)
    {
        $emp=Employee::where('emp_name',$request['username'])->get('emp_name',);
        dd($emp);        
        if($emp['emp_name']==$request['username'] && $emp['password']==$request['password'])
        {
            return view('result',['msg'=>'login successfull']);            
        }
        else{
            return view('result',['msg'=>'login unsuccessfull']);
        }

    }
    
}
