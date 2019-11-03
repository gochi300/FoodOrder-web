<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserAndroid;
use App\Product;
use App\Notification;
use Image;
use File;
use Sentinel;


class ApiController extends Controller
{

    // Auth
    public function login($mobileNumber, $password )
    {
        $user = UserAndroid::where('mobileNumber', '=', $mobileNumber)->where('password', '=', $password)->first();
        if ($user){
            return response($user);
        } else{
            return response()->json("Login failed!");
        }
    }

    public function register(Request $request)
    {
        $user = new UserAndroid();
        $user->fullName = $request->fullName;
        $user->nrcNumber = $request->nrcNumber;
        $user->dateOfBirth = $request->dateOfBirth;
        $user->mobileNumber = $request->mobileNumber;
        $user->password = $request->password;
        $user->save();

        return response($user);

    }

    // Products
    public function products()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        return response()->json($products);
    }

    // Orders
    public function orders($id)
    {
        $orders = Order::where('userId', '=', $id)->orderBy('created_at', 'DESC')->get();
        return response()->json($orders);
    }

    public function createOrder(Request $request)
    {
        $orderNumber = null;

        foreach ($request->request->all() as $request1){
            $orderNumber = $request1['orderNumber'];
            $userId= $request1['userId'];

            // **
            $order = new Order();
            $order->productId = $request1['productId'];
            $order->productName = $request1['productName'];
            $order->orderNumber = $request1['orderNumber'];
            $order->userId = $request1['userId'];
            $order->orderQty = $request1['orderQty'];
            $order->totalPrice = $request1['totalPrice'];
            $order->orderStatus = $request1['orderStatus'];
            //$order->orderTime = $request1['orderTime'];
            $order->save();

        }

        $notification = new Notification();
        $notification->userId = $userId;
        $notification->subject = "Order placed";
        $notification->message = "Order ".$orderNumber." has been placed. Thank you for your purchase";
        $notification->save();

        return response($order);
    }

    // Feedback
    public function createMail(Request $request)
    {
        $mail = new Order();
        $mail->name = $request->name;
        $mail->userId = $request->userId;
        $mail->mobileNumber = $request->mobileNumber;
        $mail->message = $request->message;
        $mail->save();

        return response($mail);
    }

    // Notificatons
    public function notifications($id)
    {
        $notifications = Notification::orderBy('userId', '=', $id)->orderBy('created_at', 'DESC')->get();
        return response()->json($notifications);
    }

}