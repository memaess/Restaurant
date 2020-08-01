<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $roles = $user->roles->first()->name;

        if ($roles == 'administrator') {
            return redirect(route('admin.index'));
        } elseif ($roles == 'operator') {
            return redirect(route('operator.index'));
        } elseif ($roles == 'employee-waiters') {
            return redirect(route('waiters.index'));
        } elseif ($roles == 'employee-cashier') {
            return redirect(route('cashier.index'));
        } elseif ($roles == 'employee-kitchen') {
            return redirect(route('kitchen.index'));
        }
    }
}
