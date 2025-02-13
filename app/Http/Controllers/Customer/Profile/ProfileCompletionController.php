<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\Profile\ProfileUpdateRequest;
use App\Http\Requests\Customer\Profile\RegisterOrderRequest;
use App\Models\Admin\Order;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileCompletionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $user_id = auth()->user()->id;
        $orders = Order::orderBy('created_at', 'desc')->where('user_id', $user_id)->get();
        return view('livewire.customer.profile.home', compact('orders'));
    }



    public function showProfile()
    {
        $user = Auth::user();
        $related_products = Product::orderBy('created_at', 'desc')->take(5)->get();
        return view('livewire.customer.profile.profile-completion', compact('user', 'related_products'));

    }

    public function updateUser(ProfileUpdateRequest $request, User $user)
    {
        $inputs = $request->all();

        if ($inputs['email'] != null) {
            $duplicate_email = User::where('email', $inputs['email'])->first();
            if ($duplicate_email != null) {
                if ($duplicate_email->count() > 0) {
                    return to_route('customer.profile.showProfile')->with('email-error', "ایمیل وارد شده در سیستم وجود دارد");
                }
            }
        }


        if ($inputs['mobile'] != null) {
            $duplicate_mobile = User::where('mobile', $inputs['mobile'])->first();
            if ($duplicate_mobile != null) {
                if ($duplicate_mobile->count() > 0) {
                    return to_route('customer.profile.showProfile')->with('mobile-error', "شماره موبایل وارد شده در سیستم وجود دارد");
                }
            }
        }


        if (request()->hasFile('profile_photo_path')) {
            if ($user->profile_photo_path != null) {
                if (unlink(public_path($user->profile_photo_path))) {
                    $file = $inputs['profile_photo_path'];
                    $directory = date('Ymd');
                    $fileName = date('His') . "." . $file->getClientOriginalExtension();
                    $result = $file->move('images' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . $directory, $fileName);
                    $inputs['profile_photo_path'] = 'images'. DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $fileName;
                }
                else {
                    return to_route('customer.profile.showProfile')->with('photo-error', "آپلود تصویر با خطا مواجه شد");

                }
            }
            else {
                $file = $inputs['profile_photo_path'];
                $directory = date('Ymd');
                $fileName = date('His') . "." . $file->getClientOriginalExtension();
                $result = $file->move('images' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . $directory, $fileName);
                $inputs['profile_photo_path'] = 'images'. DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $fileName;
//                dd($inputs['image']);
            }

        }
        else {
            $inputs['profile_photo_path'] = $user->profile_photo_path;
        }

        $user->update($inputs);

        return to_route('customer.profile.showProfile')->with('successful', 'ویرایش اطلاعات با موفقیت انجام شد');
    }


    public function showRegisterOrder()
    {
        $user = Auth::user();
        return view('livewire.customer.profile.register-order', compact('user'  ));
    }

    public function storeOrder(RegisterOrderRequest $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['order_status'] = 0;
        $order = Order::create($inputs);
        return to_route('customer.profile.index')->with('swal-success', "ثبت سفارش با موفقیت انجام شد،پشتیبان های ما به زودی با شما تماس حاصل خواهند کرد.");
    }


}
