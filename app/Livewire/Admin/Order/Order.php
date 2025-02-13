<?php

namespace App\Livewire\Admin\Order;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Admin\Order as OrderModel;

class Order extends Component
{

    public function all() {
        $orders = OrderModel::orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.order.index', compact('orders'));
    }
    public function newOrders()
    {
        $orders = OrderModel::where('order_status', 0)->orderBy('created_at', 'desc')->paginate(5);
        foreach ($orders as $order) {
            $order->order_status = 1;
            $result = $order->save();
        }
        return view('livewire.admin.order.index', compact('orders'));
    }
    public function visited()
    {
        $orders = OrderModel::where('order_status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.order.index', compact('orders'));
    }

    public function approved()
    {
        $orders = OrderModel::where('order_status', 2)->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.order.index', compact('orders'));
    }
    public function finished()
    {
        $orders = OrderModel::where('order_status', 3)->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.order.index', compact('orders'));
    }
    public function canceled()
    {
        $orders = OrderModel::where('order_status', 4)->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.admin.order.index', compact('orders'));
    }


    public function changeStatusToApproved(OrderModel $order)
    {
        $order->order_status = 2;
        $result = $order->save();
        return back()->with('success', 'وضعیت سفارش با موفقیت تغییر کرد');
    }
    public function changeStatusToFinished(OrderModel $order)
    {
        $order->order_status = 3;
        $result = $order->save();
        return back()->with('success', 'وضعیت سفارش با موفقیت تغییر کرد');
    }
    public function changeStatusToCanceled(OrderModel $order)
    {
        $order->order_status = 4;
        $result = $order->save();
        return back()->with('success', 'وضعیت سفارش با موفقیت تغییر کرد');
    }

    public function show(OrderModel $order)
    {
        return view('livewire.admin.order.show', compact('order'));
    }

    public function render()
    {
        return view('livewire.admin.order.index');
    }
}
