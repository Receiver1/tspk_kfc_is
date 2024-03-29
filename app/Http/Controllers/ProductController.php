<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {
        $paginator = Product::paginate();
        return $paginator->links('panel.products');
    }
}
