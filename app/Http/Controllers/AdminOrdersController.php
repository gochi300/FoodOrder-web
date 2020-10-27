<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Order;
use Illuminate\Http\Request;
use DB;

class AdminOrdersController extends Controller
{
    public function index()
    {

        $orders = Order::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function view($orderNumber)
    {
        $orders = Order::where('orderNumber', '=', $orderNumber)->get();

        return view('admin.orders.view', compact('orders'));
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function save()
    {

    }

    public function orderReady($orderNumber)
    {
        $orders = Order::where('orderNumber', '=', $orderNumber)->get();
        foreach ($orders as $order){
            $order->orderStatus = "ready";
            $order->update();
        }

        $notification = new Notification();
        $notification->userId = 1;
        $notification->subject = "Order ready";
        $notification->message = "Order ".$orderNumber." is ready for collection";
        $notification->save();

        return redirect('/orders');
    }

    public function destroy($id)
    {
        Order::destroy($id);
        return redirect('/orders');
    }
}
