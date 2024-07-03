<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Favorite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginRegistration extends Controller
{
   public function loginandregistration()
   {
       return view('loginregistration');
   }
    public function createRegistration(Request $request)
    {
        $valid = $request->validate([
            'txt'=> 'string|required|max:50',
            'email'=> 'email|required|max:50',
            'password'=> 'string|required|max:20'
        ]);

        $username = $request['txt'];
        $email = $request['email'];
        $password = $request['password'];

        $hash = Hash::make($password);

        $check = User::where('role','Users')->where('email',$email)->first();
        if ($check){
            return redirect()->back()->with('error','Already exists');
        }
        else {
            $user = User::create([
                'name' => $username,
                'email' => $email,
                'password' => $hash,
                'role' => 'Users'
            ]);
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user(); // Get the authenticated user
                if ($user->role === 'Users') { // Assuming role is stored as a property on the user model
                    return redirect()->route('welcome', ['id' => $user->id]);
                }
            } else {
                return redirect()->back()->with('error', 'Invalid Credentials');
            }
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            $user = Auth::user(); // Get the authenticated user
            if ($user->role === 'Users') { // Assuming role is stored as a property on the user model
                return redirect()->route('welcome', ['id' => $user->id]);
            }
        }
        else{
            return redirect()->back()->with('error','Invalid Credentials');
        }
    }

    public function welcome($id)
    {
        $user = User::find($id);
        $category = DB::table('categories')->take(11)->get();
        $products = DB::table('products')->inRandomOrder()->take(12)->get();
        $cart = Cart::where('status','Pending')->where('user_id',$user->id)->count();
        $favorute = Favorite::where('user_id',$user->id)->count();
        $total = Cart::where('status','Pending')->where('user_id',$user->id)->sum('price');
        $lateset = DB::table('products')->take(3)->inRandomOrder()->get();
        $lateset2 = DB::table('products')->take(3)->inRandomOrder()->get();

        $most = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->select('products.product_name','products.image','products.price', 'carts.product_id', DB::raw('SUM(carts.quantity) as total_sold'))
            ->groupBy('carts.product_id', 'products.product_name','products.image','products.price')
            ->orderByDesc('total_sold')
            ->where('status','Delivered')
            ->take(3)
            ->get();

        return view('user.welcome',[
            'id'=>$user,
            'category'=>$category,
            'product'=>$products,
            'cart'=>$cart,
            'favorite'=>$favorute,
            'total'=>$total,
            'lateset'=>$lateset,
            'lateset2'=>$lateset2,
            'most'=>$most]);
    }

    public function logout()
    {
        Auth::logout();


        return redirect()->route('home');
    }

    public function forget()
    {
        $email = \request('email');
        return view('auth.forget-password',['email'=>$email]);
    }

    public function showResetForm(Request $request, $token)
    {
        $email = $request->email;
        return view('auth.reset-password')->with(
            ['token' => $token, 'email' => $email]
        );
    }
}
