<?php

use App\Http\Controllers\Api\AIApiController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\Partner\ProductPartnerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\CategoryLivestockController;
use App\Http\Controllers\Api\CategoryProductController;
use App\Http\Controllers\Customer\AuthCustomerController;
use App\Http\Controllers\Customer\GoogleSocialiteController;
use App\Http\Controllers\Api\FarmController;
use App\Http\Controllers\Api\GenderLivestockController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\KategoriProductController;
use App\Http\Controllers\Api\LivestockController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\PartnerAuthController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\TypeLivestockController;
use App\Http\Controllers\Payment\TripayCallbackController;
use App\Http\Controllers\Web\AIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('checkout/callback', [TripayCallbackController::class, 'handle']);

Route::get('/product/nearest', [AIApiController::class, 'index']);
Route::get('/product/nearest/ai', [AIController::class, 'fetchData']);
Route::get('/product/nearest/ai/test', [AIApiController::class, 'getProduct']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function() {
    Route::post('/admin/login', [AuthController::class, 'login']);
    Route::post('/partner/login', [PartnerAuthController::class, 'login']);
    Route::post('/partner/register', [PartnerAuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);

    /**
     * Route api for AI
     */
    // route api for customer
    Route::post('/customer/login', [AuthCustomerController::class, 'login']);
    Route::post('/customer/register', [CustomerController::class, 'register']);
    Route::post('/customer/verifyemail', [CustomerController::class, 'verifyUserEmail']);
    Route::post('/customer/resendverifyemail', [CustomerController::class, 'resendEmailVerificationLink']);
    Route::get('/login/google/callback', [GoogleSocialiteController::class, 'handleCallback']); 
});

Route::group([
    'middleware' => 'api',
], function() {
    Route::get('order/new', [OrderController::class, 'order_new']);
    Route::get('order/confirmed', [OrderController::class, 'order_confirmed']);
    Route::get('order/packed', [OrderController::class, 'order_packed']);
    Route::get('order/sent', [OrderController::class, 'order_sent']);
    Route::get('order/accepted', [OrderController::class, 'order_accepted']);
    Route::get('order/end', [OrderController::class, 'order_end']);
    Route::post('order/status/{order}', [OrderController::class, 'handle_status']);
    Route::get('partner/confirmed', [PartnerController::class, 'partner_confirmed']);
    Route::get('partner/unconfirmed', [PartnerController::class, 'partner_not_confirmed']);
    Route::post('partner/status/{partner}', [PartnerController::class, 'handle_status']);
    Route::resources([
        'category' => CategoryProductController::class,
        'product' => ProductController::class,
        'slider' => SliderController::class,
        'livestock' => LivestockController::class,
        'partner' => PartnerController::class,
        'categorylivestock' => CategoryLivestockController::class,
        'order' => OrderController::class,
        // 'report' => ReportController::class,
        'review' => ReviewController::class,
        'testimonial' => TestimonialController::class,
        'typelivestock' => TypeLivestockController::class,
        'payment' => PaymentController::class,
        'farm' => FarmController::class,
        'genderlivestock' => GenderLivestockController::class,
    ]);
    Route::get('report', [ReportController::class, 'get_data']);
    Route::get('partner/{username}/product', [ProductPartnerController::class, 'index']);
    Route::post('partner/{username}/product/add', [ProductPartnerController::class, 'store']);
    Route::get('partner/{username}/product/{product}', [ProductPartnerController::class, 'update']);
    Route::put('partner/{username}/product/{product}/edit', [ProductPartnerController::class, 'update']);
    Route::delete('partner/{username}/product/{product}/delete', [ProductPartnerController::class, 'destroy']);
});
