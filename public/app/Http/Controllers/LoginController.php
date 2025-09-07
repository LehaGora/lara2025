<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(StoreLoginRequest $request): RedirectResponse
    {
        //dd($validated);
        //$passwordHash = Hash::make($validated['password']);
        //DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', [NULL, $validated['email'], $validated['email'], $passwordHash]);

        // dd($request->all());

        // $validated = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:8',
        //     'checkbox' => 'accepted',
        // ]);

        // $title = $request->old('email');
        // dd($title);

        $validated = $request->validated();

        if (Auth::attempt( [ 'email' => $validated['email'], 'password' => $validated['password'], 'id' => 22 ] )) {
            return redirect()->intended('session');
        }

        return back()->withErrors([
            'email' => 'Предоставленные email или пароль неверны!!!',
        ])->onlyInput('email');


        return redirect('/users');
    }

    public function index(): View
    {
        return view( 'welcome-login' );
    }
}
