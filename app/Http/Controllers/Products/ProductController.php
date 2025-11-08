<?php

namespace App\Modules\Products\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() { /* list products */ }
    public function create() { return view('products.create'); }
    public function store(Request $request) { /* save product */ }
    public function show($id) { /* show product */ }
    public function edit($id) { /* edit form */ }
    public function update(Request $request, $id) { /* update product */ }
    public function destroy($id) { /* delete product */ }
}
