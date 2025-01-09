<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class mitraController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('admin.addUser');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $data = $request->all();
        $check = $this->post($data);

        return redirect()->intended('/admin/adduser');
    }

    public function post(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'password' => Hash::make($data['password']),
        'role' => 1
      ]);
    }
}
