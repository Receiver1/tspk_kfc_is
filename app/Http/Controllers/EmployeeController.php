<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request) {
        $paginator = User::paginate();
        return $paginator->links('panel.employees');
    }
}