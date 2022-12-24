<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Session;


class PartnerController extends Controller
{
    public function index(){
        return view('partner.index');
    }

    public function createStepOne(Request $request)
    {
        $user = $request->session()->get('user');
        return view('partner.registerOne',compact('user'));
    }

    public function storeStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birth_date' => ['required', 'date'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = $request->session()->get('user');
        $user = new user();
        $name = $user->name = $request->name;
        $username = $user->username = $request->username;
        $address = $user->address = $request->address;
        $phone_number = $user->phone_number = $request->phone_number;
        $email = $user->email = $request->email;
        $birth_date = $user->birth_date = $request->birth_date;
        $password = $user->password = Hash::make($request->password);

        $user->fill([$name, $username, $address, $phone_number, $email, $birth_date, $password]);
        $request->session()->put('user', $user);

        return redirect()->route('partner.registerTwo');
    }

    public function createStepTwo(Request $request)
    {
        $user = $request->session()->get('user');
        return view('partner.registerTwo',compact('user'));
    }

    public function storeStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'business_name' => ['required', 'string', 'max:255'],
            'business_location' => ['required', 'string', 'max:255'],
            'business_description' => ['required', 'string', 'max:255'],
            'business_phone_number' => ['required', 'string', 'max:20'],
            'business_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
        $user = $request->session()->get('user');
        $level = $user->level_user = $request->level_user;
        $business_name = $user->business_name = $request->business_name;
        $business_location = $user->business_location= $request->business_location;
        $business_description = $user->business_description = $request->business_description;
        $business_phone_number = $user->business_phone_number = $request->business_phone_number;
        $business_email = $user->business_email = $request->business_email;

        $user->fill([$level, $business_name, $business_location, $business_description, $business_phone_number, $business_email]);
        $request->session()->put('user', $user);
        $user->save();
        return view('partner.index');
    }
}

