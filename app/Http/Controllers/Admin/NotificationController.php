<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function readAll()
    {
        $notifications = Notification::where('notifiable_id', Auth::user()->id)->where('read_at', null)->get();
        foreach ($notifications as $notification) {
            $notification->update(['read_at' => now()]);
        }
    }
}
