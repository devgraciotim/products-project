<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SiteController extends Controller
{
    public function index()
    {

        $products = Product::paginate(3);
        return view('site/home', compact('products'));

    }

    public function details($slug)
    {

        $product = Product::where('slug', $slug)->first();
        return view('site/details', compact('product'));

    }

    public function category($id)
    {

        $category = Category::find($id);
        $products = Product::where('id_category', $id)->paginate(3);
        return view('site/category', compact('products', 'category'));

    }
}
