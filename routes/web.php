<?php

use App\Http\Controllers\Customer\Faq\FaqController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Home\Index;
use App\Livewire\Admin\Product\Dashboard;
use App\Livewire\Admin\Product\Comment;
use App\Livewire\Admin\Product\Index as ProductIndex;
use App\Livewire\Admin\Faq\Faq;
use App\Livewire\Admin\ProductCategory\ProductCategory;
use App\Livewire\Admin\Menu\Menu;
use App\Livewire\Admin\Setting\Setting;
use App\Livewire\Admin\Order\Order;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Auth\Customer\LoginRegisterController;
use App\Livewire\Admin\Blog\Blog;
use App\Http\Controllers\Customer\Blog as BlogController;
use App\Http\Controllers\Customer\Profile\ProfileCompletionController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Customer\AboutUs\AboutUsController;

Route::middleware([\App\Http\Middleware\IsAdmin::class])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('index', Index::class)->name('admin.index');

        //product
        Route::prefix('product')->group(function () {
            //product
            Route::get('/', ProductIndex::class)->name('admin.product.index');
            Route::get('/create', [ProductIndex::class, 'create'])->name('admin.product.create');
            Route::post('/store', [ProductIndex::class, 'store'])->name('admin.product.store');
            Route::get('/edit/{product}', [ProductIndex::class, 'edit'])->name('admin.product.edit');
            Route::put('/update/{product}', [ProductIndex::class, 'update'])->name('admin.product.update');
            Route::delete('/destroy/{product}', [ProductIndex::class, 'destroy'])->name('admin.product.destroy');

            //dashboard
            Route::get('/dashboard', Dashboard::class)->name('admin.product.dashboard');

            //comment
            Route::prefix('comment')->group(function () {
                Route::get('/', Comment::class)->name('admin.product.comment.index');
                Route::get('/show/{comment}', [Comment::class, 'show'])->name('admin.product.comment.show');
                //for admin_answer
                Route::post('/answer/{comment}', [Comment::class, 'answer'])->name('admin.product.comment.answer');
                Route::delete('/destroy/{comment}', [Comment::class, 'destroy'])->name('admin.product.comment.destroy');
                //for approved comment
                Route::get('/approved/{comment}', [Comment::class, 'approved'])->name('admin.product.comment.approved');

            });

        });

        //FAQ
        Route::prefix('faq')->group(function () {
            Route::get('/', Faq::class)->name('admin.faq.index');
            Route::get('/create', [Faq::class, 'create'])->name('admin.faq.create');
            Route::post('/store', [Faq::class, 'store'])->name('admin.faq.store');
            Route::get('/edit/{faq}', [Faq::class, 'edit'])->name('admin.faq.edit');
            Route::put('/update/{faq}', [Faq::class, 'update'])->name('admin.faq.update');
            Route::delete('/destroy/{faq}', [Faq::class, 'destroy'])->name('admin.faq.destroy');
            //for status
            Route::put('/status/{faq}', [Faq::class, 'status'])->name('admin.faq.status');
        });

        //ProductCategory
        Route::prefix('product-category')->group(function () {
            Route::get('/', ProductCategory::class)->name('admin.product-category.index');
            Route::get('/create', [ProductCategory::class, 'create'])->name('admin.product-category.create');
            Route::post('/store', [ProductCategory::class, 'store'])->name('admin.product-category.store');
            Route::get('/edit/{productCategory}', [ProductCategory::class, 'edit'])->name('admin.product-category.edit');
            Route::put('/update/{productCategory}', [ProductCategory::class, 'update'])->name('admin.product-category.update');
            Route::delete('/destroy/{productCategory}', [ProductCategory::class, 'destroy'])->name('admin.product-category.destroy');
            //for changeStatus
            Route::get('/status/{productCategory}', [ProductCategory::class, 'status'])->name('admin.product-category.status');
        });

        //Blog
        Route::prefix('blog')->group(function () {
            Route::get('/', Blog::class)->name('admin.blog.index');
            Route::get('/create', [Blog::class, 'create'])->name('admin.blog.create');
            Route::post('/store', [Blog::class, 'store'])->name('admin.blog.store');
            Route::get('/edit/{blog}', [Blog::class, 'edit'])->name('admin.blog.edit');
            Route::put('/update/{blog}', [Blog::class, 'update'])->name('admin.blog.update');
            Route::delete('/destroy/{blog}', [Blog::class, 'destroy'])->name('admin.blog.destroy');
            //for changeStatus
            Route::get('/status/{blog}', [Blog::class, 'status'])->name('admin.blog.status');
        });

        //Menu
        Route::prefix('menu')->group(function () {
            Route::get('/', Menu::class)->name('admin.menu.index');
            Route::get('/create', [Menu::class, 'create'])->name('admin.menu.create');
            Route::post('/store', [Menu::class, 'store'])->name('admin.menu.store');
            Route::get('/edit/{menu}', [Menu::class, 'edit'])->name('admin.menu.edit');
            Route::put('/update/{menu}', [Menu::class, 'update'])->name('admin.menu.update');
            Route::delete('/destroy/{menu}', [Menu::class, 'destroy'])->name('admin.menu.destroy');
            //for status
            Route::put('/status/{menu}', [Menu::class, 'status'])->name('admin.menu.status');
        });

        //Setting
        Route::prefix('setting')->group(function () {
            Route::get('/', Setting::class)->name('admin.setting.index');
            Route::get('/edit/{setting}', [Setting::class, 'edit'])->name('admin.setting.edit');
            Route::put('/update/{setting}', [Setting::class, 'update'])->name('admin.setting.update');
            Route::delete('/destroy/{setting}', [Setting::class, 'destroy'])->name('admin.setting.destroy');

        });


        //order
        Route::prefix('order')->group(function () {
            Route::get('/', [Order::class, 'all'])->name('admin.order.all');
            Route::get('/new-order', [Order::class, 'newOrders'])->name('admin.order.newOrder');
            Route::get('/visited', [Order::class, 'visited'])->name('admin.order.visited');
            Route::get('/approved', [Order::class, 'approved'])->name('admin.order.approved');
            Route::get('/canceled', [Order::class, 'canceled'])->name('admin.order.canceled');
            Route::get('/finished', [Order::class, 'finished'])->name('admin.order.finished');
            //for show page
            Route::get('/show/{order}', [Order::class, 'show'])->name('admin.order.show');
            Route::get('/change-order-status-to-approved/{order}', [Order::class, 'changeStatusToApproved'])->name('admin.order.changeStatusToApproved');
            Route::get('/change-order-status-to-finished/{order}', [Order::class, 'changeStatusToFinished'])->name('admin.order.changeStatusToFinished');
            Route::get('/change-order-status-to-canceled/{order}', [Order::class, 'changeStatusToCanceled'])->name('admin.order.changeStatusToCanceled');


        });


        //seen the comments on header
        Route::put('seen-comments', [Index::class, 'seenComment'])->name('admin.comment.seenComment');
        // read all notifications
        Route::post('/notification/read-all', [NotificationController::class, 'readAll'])->name('admin.notification.readAll');


    });

});



Route::get('/', [HomeController::class, 'home'])->name('customer.home');

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('customer.blog.index');
    Route::get('/{blog:slug}', [BlogController::class, 'show'])->name('customer.blog.show');
    Route::post('/add-comment/{blog:slug}/', [BlogController::class, 'addComment'])->name('customer.blog.add-comment');

});

Route::prefix('faq')->group(function () {
    Route::get('/', [FaqController::class, 'index'])->name('customer.faq.index');
});


Route::prefix('about-us')->group(function () {
    Route::get('/', [AboutUsController::class, 'index'])->name('customer.about-us.index');
    Route::post('/store-consultation', [AboutUsController::class, 'storeConsultation'])->name('customer.about-us.storeConsultation');
});



Route::middleware([\App\Http\Middleware\IsLogin::class])->group(function () {
    Route::prefix('my-account')->group(function () {
        Route::get('/', [ProfileCompletionController::class, 'index'])->name('customer.profile.index');
        //profile-completion
        Route::get('/profile-completion', [ProfileCompletionController::class, 'showProfile'])->name('customer.profile.showProfile');
        Route::put('/profile-completion/update/{user}', [ProfileCompletionController::class, 'updateUser'])->name('customer.profile.updateUser');
        //register-order
        Route::get('/register-order', [ProfileCompletionController::class, 'showRegisterOrder'])->name('customer.profile.showRegisterOrder');
        Route::post('/store-order', [ProfileCompletionController::class, 'storeOrder'])->name('customer.profile.storeOrder');

    });
});


Route::namespace('Auth')->group(function () {
    //login register
    Route::get('login-register', [LoginRegisterController::class, 'loginRegisterForm'])->name('auth.customer.login-register-form');
    Route::post('login-register', [LoginRegisterController::class, 'loginRegister'])->middleware(\App\Http\Middleware\CustomThrottleMiddleware::class)->name('auth.customer.login-register');
    //otp-confirm
    Route::get('login-confirm/{token}', [LoginRegisterController::class, 'loginConfirmForm'])->name('auth.customer.login-confirm-form');
    Route::post('login-confirm/{token}', [LoginRegisterController::class, 'loginConfirm'])->middleware(\App\Http\Middleware\CustomThrottleMiddleware::class)->name('auth.customer.login-confirm');
    Route::get('/login-resend-otp/{token}', [LoginRegisterController::class, 'loginResendOtp'])->middleware(\App\Http\Middleware\CustomThrottleMiddleware::class)->name('auth.customer.login-resend-otp');
    //logout
    Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('auth.customer.logout');

});



