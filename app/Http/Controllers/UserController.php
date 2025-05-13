<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function signinPost(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3','max:20', Rule::unique('users','name')],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required','min:8','max:200',
        ], [
            'name.required' => 'The username field is required.',
            'name.min' => 'The username must be at least 3 characters.',
            'name.max' => 'The username may not be greater than 20 characters.',
            'name.unique' => 'The username has already been taken.',
            'email.unique' => 'The email has already been taken.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.max' => 'The password may not be greater than 200 characters.',
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('/Home');
    }

    public function loginPost(Request $request){
        $incomingFields = $request->validate([
            'loginName' => ['required', 'min:3','max:20'],
            'loginPassword' => 'required','min:8','max:200',
        ], [
        ], [
            'loginName.required' => 'The email field is required.',
            'loginName.min' => 'The username must be at least 3 characters.',
            'loginName.max' => 'The username may not be greatSSer than 20 characters.',
            'loginPassword.required' => 'The password field is required.',
        ]);

        $name = $incomingFields['loginName'];
        $password = $incomingFields['loginPassword'];

        if(auth()->attempt(['name' => $name, 'password' => $password])){
            $request->session()->regenerate();
        }
        else{
            return back()->withErrors(['loginError' => 'Invalid credentials.']);
        }

        return redirect('/Home');

    }

    public function logout(){
        auth()->logout();
        return redirect('/Home');
    }
}
