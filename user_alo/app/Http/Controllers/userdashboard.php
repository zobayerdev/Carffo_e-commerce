<?php

namespace App\Http\Controllers;

use App\Events\Invoice;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\User;
use App\Models\User_Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userdashboard extends Controller
{
   public function product_details($id,$product)
   {
       $user = User::find($id);

       $prod = DB::table('products')->find($product);

       $prods = DB::table('products')->take(8)->inRandomOrder()->get();

       $category = DB::table('categories')->get();

       $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
       $favorute = Favorite::where('user_id',$user->id)->count();
       $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');

       return view('user.product-details',['id'=>$user,'categories'=>$category, 'cart'=>$cart,
           'favorite'=>$favorute,'prods'=>$prods,'prod'=>$prod,'total'=>$total]);
   }

   public function searchFunction(Request $request)
   {
       $query = $request->input('query');

       $results = DB::table('products')->where('product_name','like',"%$query%")->get();

       return redirect()->route('productsall',['id'=>$request->input('id'),'search' => $query,'results' => $results]);
   }
   public function cart_insert(Request $request)
   {
       $totalPrice = $request->input('quantity') * $request->input('price');

       Cart::create([
           'user_id' => $request->input('user_id'),
           'product_id' => $request->input('product_id'),
           'quantity' => $request->input('quantity'),
           'price' => $totalPrice,
           'status' => 'Pending'
       ]);


       return redirect()->back();
   }

   public function cart_details($id)
   {
       $user = User::find($id);

       $carts = Cart::where('status','Pending')->where('user_id',$user->id)->count();
       $favorute = Favorite::where('user_id',$user->id)->count();
       $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');
       $category = DB::table('categories')->get();

       $cart = Cart::select('carts.*','carts.id as cart_id', 'products.*', 'products.price as product_price','carts.price as carts_price')
           ->join('products', 'carts.product_id', '=', 'products.id')
           ->where('user_id', $user->id)
           ->where('status','Pending')
           ->get();


       return view('user.cart',['id'=>$user,'cart'=>$cart,'carts'=>$carts,
           'favorite'=>$favorute,'total'=>$total,'category'=>$category]);
   }

   public function updateCart(Request $request)
   {
       $total = $request->input('quantity') * $request->input('price');
       Cart::where('id',$request->input('id'))->update([
           'quantity' => $request->input('quantity'),
           'price' => $total
       ]);

       return redirect()->back();
   }

    public function deleteFromCart(Request $request)
    {
        Cart::where('id', $request->input('id'))->delete();

        return redirect()->back();
    }

    public function checkout($id)
    {
        $order_no = rand(10000,99999);
        $user = User::find($id);
        $cart = Cart::select('carts.*','carts.id as cart_id', 'products.*')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('user_id', $user->id)
            ->where('status','Pending')
            ->get();

        $carts = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');
        $category = DB::table('categories')->get();

        $user_info = User_Info::where('email',$user->email)->first();

        return view('user.checkout',['id'=>$user,'cart'=>$cart,'carts'=>$carts,
            'favorite'=>$favorute, 'order' =>$order_no, 'info'=>$user_info,'total'=>$total,'category'=>$category]);
    }

    public function makePayment(Request $request)
    {
        $user = $request->input('id');
        if ($request->has('ship')) {
            Cart::where('user_id', $request->input('id'))->where('status', 'Pending')->update([
                'order_no' => $request->input('order'),
                'transaction_id' => $request->input('payment'),
                'status' => 'Processing',
                'payment' => $request->input('payment_method'),
                'city' => $request->input('city'),
                'phone' => $request->input('phone'),
                'shipping_address' => $request->input('shipaddress')
            ]);
        } else {
            Cart::where('user_id', $request->input('id'))->where('status', 'Pending')->update([
                'order_no' => $request->input('order'),
                'transaction_id' => $request->input('payment'),
                'status' => 'Processing',
                'payment' => $request->input('payment_method'),
                'city' => $request->input('city'),
                'phone' => $request->input('phone'),
                'shipping_address' => $request->input('address')
            ]);
        }

        $userid = $request->input('order');

//        dd($userid);



        $check = User_Info::where('email', $request->input('email'))->first();
        if (!$check) {
            User_Info::create([
                'fname' => $request->input('fname'),
                'lname' => $request->input('lname'),
                'email' => $request->input('email'),
                'semail' => $request->input('semail'),
                'phone' => $request->input('phone'),
                'shipaddress' => $request->input('address'),
                'city' => $request->input('city'),
                'country' => $request->input('country'),
            ]);
        }

        event(new Invoice($userid));

        return redirect()->route('invoice',['invoice'=> $request->input('order'),'id'=>$user]);
    }

    public function favorite(Request $request)
    {
        Favorite::create([
            'user_id' => $request->input('user_id'),
            'product_id' => $request->input('product_id')
        ]);

        return redirect()->back();
    }

    public function favroitePages($id)
    {
        $user = User::find($id);
        $favorite = Favorite::where('user_id',$user->id)
            ->select('favorites.*','products.*','favorites.id as favs_id')
            ->join('products','favorites.product_id','=','products.id')
            ->get();

        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');
        $category = DB::table('categories')->get();

        return view('user.favorite',['id'=>$user,'favs'=>$favorite,'cart'=>$cart,
            'favorite'=>$favorute,'total'=>$total,'category'=>$category]);
    }

    public function deleteFavs(Request $request)
    {
        Favorite::where('id', $request->input('id'))->delete();

        return redirect()->back();
    }

    public function productsall($id)
    {
        $user = User::find($id);

        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
        $product = DB::table('products')->paginate(12);
        $dis = DB::table('products')->inRandomOrder()->paginate(12);
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();

        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');

        return view('user.products',['id'=>$user,
            'late'=>$late,'late2'=>$late2,
            'prod'=>$product,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'cart'=>$cart,
            'favorite'=>$favorute,'total'=>$total]);
    }

    public function invoice($id)
    {
        $invoice = \request('invoice');
        $user = User::find($id);

        $carts = DB::table('carts')->where('order_no',$invoice)
            ->select('carts.*','products.*')
            ->join('products','carts.product_id','=','products.id')
            ->get();

        $cat = DB::table('carts')->where('order_no',$invoice)
            ->select('carts.*','products.*')
            ->join('products','carts.product_id','=','products.id')
            ->first();

        $userInfo = User_Info::where('email',$user->email)->first();
        return view('user.invoice',['invoice'=>$invoice,'carts'=>$carts,'id'=>$user,'info'=>$userInfo,'cat'=>$cat]);
    }

    public function contract($id)
    {
        $user = User::find($id);
        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');
        $categories = DB::table('categories')->get();

        return view('user.contract',['id'=>$user,'cart'=>$cart,
            'favorite'=>$favorute,
            'total'=>$total,
            'category'=>$categories]);
    }

    public function category($id)
    {
        $user = User::find($id);

        $category = \request('category');
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->where('category',$category)->get();
        $product = DB::table('products')->where('category',$category)->get();
        $dis = DB::table('products')->take(6)->inRandomOrder()->get();
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();

        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');

        return view('user.userfilterData.category',['id'=>$user,
            'late'=>$late,'late2'=>$late2,
            'prod'=>$product,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'cart'=>$cart,
            'favorite'=>$favorute,'total'=>$total]);
    }

    public function sub_category($id)
    {
        $user = User::find($id);

        $category = \request('sub_category');
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
        $product = DB::table('products')->where('sub_category',$category)->get();
        $dis = DB::table('products')->take(6)->inRandomOrder()->get();
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();

        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');

        return view('user.userfilterData.sub-category',['id'=>$user,
            'late'=>$late,'late2'=>$late2,
            'prod'=>$product,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'cart'=>$cart,
            'favorite'=>$favorute,'total'=>$total]);
    }

    public function search_data($id, Request $request)
    {
        $user = User::find($id);
        $keyword = $request->input('keyword');

        $products = DB::table('products')->where('product_name', 'like', '%' . $keyword . '%')->get();


        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
//        $product = DB::table('products')->where('sub_category',$category)->paginate(12);
        $dis = DB::table('products')->take(6)->inRandomOrder()->get();
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();

        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');

        return view('user.userfilterData.search-data',['id'=>$user,
            'late'=>$late,'late2'=>$late2,
            'prod'=>$products,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'cart'=>$cart,
            'favorite'=>$favorute,'total'=>$total,'keyword'=>$keyword]);
    }

    public function purchase($id)
    {
        $user = User::find($id);

        $categories = DB::table('categories')->get();
        $subcategories = DB::table('subcategories')->get();
        $product = DB::table('products')->paginate(12);
        $dis = DB::table('products')->take(6)->inRandomOrder()->get();
        $late = DB::table('products')->take(3)->inRandomOrder()->get();
        $late2 = DB::table('products')->take(3)->inRandomOrder()->get();

        $favorite = Cart::where('user_id',$user->id)
            ->select('carts.*','products.*','carts.id as favs_id')
            ->join('products','carts.product_id','=','products.id')
            ->get();

        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');

        return view('user.purchase-history',['id'=>$user,'late'=>$late,'late2'=>$late2,
            'prod'=>$product,'discount'=>$dis,
            'category'=>$categories,
            'subcategories'=>$subcategories,'cart'=>$cart,
            'favorite'=>$favorute,'total'=>$total,'favs'=>$favorite]);
    }
}
