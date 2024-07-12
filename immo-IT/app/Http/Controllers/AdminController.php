<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest as RequestModel;
use App\Models\Properties;
use App\Models\Property;

class AdminController extends Controller
{
    public function dashboard()
    {
        $requests = RequestModel::all();
        $property = Properties::all();

        return view('admin.dashboard', compact('requests', 'property'));
    }
}
