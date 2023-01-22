<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // ! Disregard since di naman gagamitin yung home.blade.php (Template)
    // public function index()
    // {
    //     return view('home');
    // }

    public function mainAdminHome()
    {
        return view('home.mainAdmin');
    }

    public function depAdminHome()
    {
        return view('home.depAdmin');
    }

    public function staffHome()
    {
        return view('home.staff');
    }

    public function librarianHome()
    {
        return view('home.librarian');
    }
}
