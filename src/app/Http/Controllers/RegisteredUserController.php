<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;

class RegisteredUserController extends Controller
{
    public function index()
    {
    return view('rest');
    }