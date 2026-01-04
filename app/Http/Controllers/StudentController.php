<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index(){
        if (! session()->has('matric_no') && ! session()->has('name')) {
            return view('login', [
                'invalid' => false,
                'error_msg' => '',
            ]);
        } else {
            return redirect('/bookings');
        }
    }

    public function login(Request $request) {
        
        $credentials = $request->validate([
            "matric_no"=> "required",
            "password" => "required"
        ]);

        $user = Student::where("matric_no", $credentials["matric_no"])->first();

        if (!$user) {
            return view('login', [
                'invalid' => true,
                'error_msg'=> 'Invalid Credentials',
            ]);
        }else if ($user->password !== $credentials["password"]) {
            return view('login', [
                'invalid' => true,
                'error_msg' => 'Invalid Credentials',
            ]);
        } else {
            session([
                'matric_no' => $user->matric_no,
                'name' => $user->name
            ]);
            return redirect('/bookings');
        }

    }

    public function logout(Request $request) {
        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
