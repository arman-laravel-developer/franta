<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ForgotPasswordController;

use App\Models\RoleRoute;

function getRoleName($routeName)
{
    $routesData = RoleRoute::where('route_name', $routeName)->get();
    $result = [];
    foreach ($routesData as $routeData) {
        array_push($result, $routeData->role_name);
    }
    return $result;
}
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/winner-list', [HomeController::class, 'winner'])->name('winner');

Route::get('/contest-details/{id}/{slug}', [HomeController::class, 'details'])->name('details.contest');
Route::get('/all-contest', [HomeController::class, 'allContest'])->name('all.contest');

Route::post('/new-user-create', [UserAuthController::class, 'index'])->name('new.user');

Route::post('/login-check', [UserAuthController::class, 'loginCheck'])->name('login.check');

Route::post('/add-to-cart/{id}', [CartController::class, 'index'])->name('contest.cart');
Route::get('/delete-cart-contest/{id}', [CartController::class, 'remove'])->name('delete-cart-contest');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/new-order', [CheckoutController::class, 'newOrder'])->name('new.order');

Route::get('/show-cart', [CartController::class, 'show'])->name('cart.show');
Route::post('/update-cart/{id}', [CartController::class, 'update'])->name('update.cart');

Route::post('/user-auth-logout', [UserAuthController::class, 'logOut'])->name('userAuth.logout');

Route::middleware(['user.auth.logout'])->group(function (){
    Route::post('/image-upload', [UserAuthController::class, 'uploadImage'])->name('upload.image');

    Route::get('/user-dashboard', [UserDashboardController::class, 'dashboard'])->name('userAuth.dashboard');
    Route::get('/personal-information', [UserDashboardController::class, 'index'])->name('personal.information');
    Route::get('/transaction', [UserDashboardController::class, 'transaction'])->name('transaction');
    Route::get('/order-history', [UserDashboardController::class, 'orderHistory'])->name('order.history');

    Route::get('/confirm-order/{id}', [CheckoutController::class, 'confirmOrder'])->name('confirm.order');

    Route::post('/make-payment', [CheckoutController::class, 'makePayment'])->name('make.payment');

    Route::post('/update-personal-info', [UserDashboardController::class, 'update'])->name('update.personal');
    Route::post('/update-password-info', [UserDashboardController::class, 'updatePass'])->name('user.password');
});

Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password-reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');


Route::post('/check-email-unique', [UserAuthController::class,'checkEmailUnique'])->name('checkEmailUnique');



Route::get('/privacy-policy', [PrivacyController::class, 'page_view'])->name('privacy.view');
Route::get('/terms-and-condition', [PrivacyController::class, 'condition_page_view'])->name('condition.view');

Route::prefix('profile')->group(function () {
    Route::get('/', [HomeController::class, 'profileView'])->name('profile.view');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/ticket-manage', [TicketController::class, 'index'])->name('ticket.manage');
    Route::get('/ticket-show/{id}', [TicketController::class, 'show'])->name('ticket.show');
    Route::get('/ticket-draw', [TicketController::class, 'draw'])->name('ticket.draw');
    Route::post('/winner-draw', [TicketController::class, 'winner'])->name('winner.draw');
        Route::middleware(['roles'])->group(function () {
            Route::group(['prefix' => 'role', 'as' => 'role.'], function(){
                Route::get('/add', [RoleController::class, 'index'])->name('add');
                Route::post('/new', [RoleController::class, 'create'])->name('new');
                Route::get('/manage', [RoleController::class, 'manage'])->name('manage');
                Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('delete');
            });

            Route::prefix('user')->group(function () {
                Route::get('/add', [UserController::class, 'index'])->name('user.add');
                Route::post('/new', [UserController::class, 'create'])->name('user.new');
                Route::get('/manage', [UserController::class, 'manage'])->name('user.manage');
                Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
                Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
                Route::get('/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
            });
            Route::prefix('slider')->group(function () {
                Route::get('/add', [SliderController::class, 'index'])->name('slider.add');
                Route::post('/new', [SliderController::class, 'create'])->name('slider.new');
                Route::get('/manage', [SliderController::class, 'manage'])->name('slider.manage');
                Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
                Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
                Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
            });
            Route::prefix('category')->group(function () {
                Route::get('/add', [CategoryController::class, 'index'])->name('category.add');
                Route::post('/new', [CategoryController::class, 'create'])->name('category.new');
                Route::get('/manage', [CategoryController::class, 'manage'])->name('category.manage');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
                Route::post('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
            });
            Route::prefix('orders')->group(function () {
                Route::get('/pending', [OrderController::class, 'index'])->name('order.pending');
                Route::post('/new', [OrderController::class, 'create'])->name('order.new');
                Route::get('/approved', [OrderController::class, 'manage'])->name('order.approved');
                Route::get('/pending-detail/{id}', [OrderController::class, 'detail'])->name('order.detail-pending');
                Route::get('/apporval-detail/{id}', [OrderController::class, 'approvalDetail'])->name('order.detail-approval');
                Route::get('/ticket-generate/{id}', [OrderController::class, 'update'])->name('ticket.generate');
                Route::post('/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');
            });
            Route::prefix('privacy')->group(function () {
                Route::get('/add', [PrivacyController::class, 'index'])->name('privacy.add');
                Route::post('/new', [PrivacyController::class, 'create'])->name('privacy.new');
                Route::get('/manage', [PrivacyController::class, 'manage'])->name('privacy.manage');
                Route::get('/edit/{id}', [PrivacyController::class, 'edit'])->name('privacy.edit');
                Route::post('/update/{id}', [PrivacyController::class, 'update'])->name('privacy.update');
                Route::post('/delete/{id}', [PrivacyController::class, 'delete'])->name('privacy.delete');
            });
            Route::prefix('customer')->group(function () {
//                Route::get('/add', [PrivacyController::class, 'index'])->name('customer.add');
                Route::get('/customer-manage', [UserAuthController::class, 'userOnAdmin'])->name('customer.manage');
                Route::get('/customer-login/{id}', [UserAuthController::class, 'manage'])->name('customer.login');
                Route::get('/edit/{id}', [UserAuthController::class, 'edit'])->name('customer.edit');
                Route::post('/update/{id}', [UserAuthController::class, 'update'])->name('customer.update');
//                Route::post('/delete/{id}', [PrivacyController::class, 'delete'])->name('customer.delete');
            });
            Route::prefix('contest')->group(function () {
                Route::get('/add', [ContestController::class, 'index'])->name('contest.add');
                Route::post('/new', [ContestController::class, 'create'])->name('contest.new');
                Route::get('/manage', [ContestController::class, 'manage'])->name('contest.manage');
                Route::get('/edit/{id}', [ContestController::class, 'edit'])->name('contest.edit');
                Route::post('/update/{id}', [ContestController::class, 'update'])->name('contest.update');
                Route::get('/delete/{id}', [ContestController::class, 'delete'])->name('contest.delete');
            });
        });
    });

