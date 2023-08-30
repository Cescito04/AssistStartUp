<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::where('status', false)->get();
        $messages= Contact::all();
        $services= Service::all();
        return view('admin.index', compact('users','messages','services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    
}