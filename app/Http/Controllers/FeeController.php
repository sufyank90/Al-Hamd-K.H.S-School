<?php


namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    public function index()
    {
        $fees = Fee::all();
        return view('fees.index', compact('fees'));
    }

    // Add other controller methods as needed (create, store, edit, update, destroy)
}
