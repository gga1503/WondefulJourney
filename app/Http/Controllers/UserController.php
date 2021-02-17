<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function listUser()
    {
        $users = User::where('role', 'User')->get();
        return view('admins.list_user', compact('users'));
    }

    public function delete($id)
    {
        $users = User::where('id', $id)->first();
        if ($users != null) {
            $users->delete();
            return redirect('/list_user');
        }

        return redirect('/list_user');
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        $user->save();

        return redirect('/profile');
    }

    public function getLogin(Request $request)
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'email' => 'email|required|string',
            'password' => 'required|min:5',
        ]);

        $credentials = $request->only('role', 'email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'Admin') {
                return redirect('/list_user');
            } else if (Auth::user()->role == 'User') {
                return redirect('/greeting');
            }
        }

        return redirect('/login')->with('flash_message_error', 'Invalid Username or Password');
    }

    public function getRegister()
    {
        return view('sign_up');
    }


    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:App\User,email'],
            'password' => ['required', 'min:5'],
            'confirmed_password' => ['required', 'min:5', 'same:password']
        ]);

        $user = new User;
           $user-> name = $request->input('name');
           $user->phone =$request->input('phone');
           $user-> email = $request->input('email');
           $user-> password = bcrypt($request->input('password'));

        $user->save();

        $this->middleware('guest');

        return redirect('/login');
    }

    protected function guard()
    {
        return Auth::guard();
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
