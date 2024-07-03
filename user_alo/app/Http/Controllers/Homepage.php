<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Homepage extends Controller
{
    public function welcome()
    {
        $category = DB::table('categories')->get();
        $products = DB::table('products')->take(12)->inRandomOrder()->get();
        $lateset = DB::table('products')->take(3)->inRandomOrder()->get();
        $lateset2 = DB::table('products')->take(3)->inRandomOrder()->get();

        $prod = DB::table('products')->inRandomOrder()->first();


        $most = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('products.product_name','products.id','products.image','products.price', 'carts.product_id', DB::raw('SUM(carts.quantity) as total_sold'))
            ->groupBy('carts.product_id', 'products.product_name','products.image','products.price','products.id')
            ->orderByDesc('total_sold')
            ->where('status','Delivered')
            ->take(3)
            ->inRandomOrder()
            ->get();

        return view('welcome',['category'=>$category,'product'=>$products,
            'lateset'=>$lateset,
            'lateset2'=>$lateset2,
            'most'=>$most,'seo'=>$prod]);
    }

    public function shopping_cart()
    {
        return view('shopping-cart');
    }

    public function shop_grid()
    {
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
        $product = DB::table('products')->paginate(12);
        $dis = DB::table('products')->inRandomOrder()->paginate(12);
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();
        return view('shop-grid',['late'=>$late,'late2'=>$late2,
            'prod'=>$product,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories]);
    }

    public function shop_details()
    {
        $product = \request('product');
        $prod = DB::table('products')->where('id',$product)->first();

        $prods = DB::table('products')->take(8)->inRandomOrder()->get();

        $category = DB::table('categories')->get();
        return view('shop-details',['product'=>$product,'categories'=>$category,'prods'=>$prods,'prod'=>$prod]);
    }

    public function contact()
    {
        $categories = DB::table('categories')->get();
        return view('contact',['cata'=>$categories]);
    }

    public function checkout()
    {
        $category = \request('sub-category');
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
        $product = DB::table('products')->where('sub_category',$category)->get();
        $dis = DB::table('products')->take(6)->inRandomOrder()->get();
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();
        return view('filterData.sub-category',['late'=>$late,'late2'=>$late2,
            'prod'=>$product,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'cats'=>$category]);
    }

    public function blog_details(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = DB::table('products')->where('product_name', 'like', '%' . $keyword . '%')->get();


        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
//        $product = DB::table('products')->paginate(12);
        $dis = DB::table('products')->take(6)->inRandomOrder()->get();
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();
        return view('filterData.search-data',['late'=>$late,'late2'=>$late2,
            'prod'=>$products,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'keyword'=>$keyword]);
    }

    public function blog()
    {
        $category = \request('category');
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->where('category',$category)->get();
        $product = DB::table('products')->where('category',$category)->get();
        $dis = DB::table('products')->take(6)->inRandomOrder()->get();
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();
        return view('filterData.category',['late'=>$late,'late2'=>$late2,
            'prod'=>$product,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'cats'=>$category]);
    }

    public function sendMail(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $messagess = $request->input('message');

//        dd($messagess);

        $admins = User::where('role', 'Admins')->get(); // Assuming 'admin' is a role for admins

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new AdminMail($name, $email, $subject, $messagess));
        }

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
