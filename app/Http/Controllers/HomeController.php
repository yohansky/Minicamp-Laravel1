<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // return view('home');
          //
        // $products = Product::all();
        // $products = Product::paginate(5);
        // return response()->json($products);
        // memanggil view di folder views>products>index
        $query = $request->input('query');
        $order = $request->input('order', "name");
        $sort = $request->input('sort',"asc");

        $products = Product::where($order, 'like', '%'.$query.'%')
                        ->orderBy($order, $sort)
                        ->paginate(5);

        return view('home', compact('products'));
    }
    
}
