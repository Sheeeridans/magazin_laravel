<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use function view;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 1)->get();
        return view('auth.orders.index', compact('orders'));
    }
}