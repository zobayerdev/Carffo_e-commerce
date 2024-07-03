<?php

namespace App\Listeners;

use App\Events\Invoice;
use App\Models\User_Info;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InvoiceListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Invoice $event): void
    {
        $cart = DB::table('carts')
            ->where('order_no', $event->userid)
            ->first();

        $total = DB::table('carts')
            ->where('order_no', $event->userid)->sum('price');
//        dd($cart->id);

        $admin = DB::table('users')->where('role', 'Admins')->get();

        $users = DB::table('users')->where('id', $cart->user_id)->first();

        $info = User_Info::where('email',$users->email)->first();

        $now = Carbon::now('Asia/Dhaka')->format('F j, Y');

        $carts = DB::table('carts')->where('order_no',$event->userid)
            ->select('carts.*','products.*')
            ->join('products','carts.product_id','=','products.id')
            ->get();

//        dd($users);

        // Mail to admin
        foreach ($admin as $admins) {
            Mail::send('user.email-invoice', ['users' => $users,'info'=>$info,'cata'=>$carts,'now'=>$now, 'total'=>$total,'admin' => $admins, 'carts' => $cart], function ($message) use ($admins,$now,$info,$carts, $users, $cart,$total) {
                $message->to($admins->email);
                $message->subject('Invoice for Admin');
            });
        }

        // Mail to user
        Mail::send('user.email-invoice', ['users' => $users,'info'=>$info,'cata'=>$carts,'now'=>$now, 'total'=>$total,'admin' => null, 'carts' => $cart], function ($message) use ($users,$now,$info,$carts, $cart,$total) {
            $message->to($users->email);
            $message->subject('Your Invoice');
        });
    }

}
