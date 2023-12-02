<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deptos;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deptos = Deptos::all();
        return view('dashboard', compact('deptos'));
    }
}
