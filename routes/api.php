<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::get('/', function () {
    return "API";
});

// Route::middleware(['admin'])->group(function () {
//     Route::get('/displaystaff', [AdminController::class, 'displaystaff']);
//     Route::get('/findstaff/{id}', [AdminController::class, 'findstaff']);
//     Route::post('/addstaff', [AdminController::class, 'addstaff']);
//     Route::put('/updatestaff/{id}', [AdminController::class, 'updatestaff']);
//     Route::delete('/deletestaff/{id}', [AdminController::class, 'deletestaff']);
//     Route::post('/update-profile-image/{id}', [AdminController::class, 'updateProfileImage']);
//     // Add other admin routes here
// });


//customer - login
Route::post('login', [CustomerController::class,'login']);
Route::post('logout', [CustomerController::class,'logout'])->middleware('auth:sanctum');
Route::post('/signup',[CustomerController::class,'signup']);
Route::get('displayCustomer/{id}',[CustomerController::class,'displayCustomer']);

//customer - home
Route::post('/addtrans',[CustomerController::class,'addtrans']);
Route::post('/insertDetails',[CustomerController::class,'insertDetails']);
Route::post('/updateTransactionStatus', [CustomerController::class, 'updateStatus']);
Route::post('/transactions', [CustomerController::class, 'store']);
Route::post('/updatetrans', [CustomerController::class,'updatetrans']);
Route::get('/getlist',[CustomerController::class,'getlist']);
Route::get('/display/{id}',[CustomerController::class,'display']);
Route::get('/gethis/{id}',[CustomerController::class,'gethis']);
Route::get('/cancelTrans/{id}',[CustomerController::class,'cancelTrans']);
Route::get('/updateStatus/{id}',[CustomerController::class,'updateStatus']);
Route::get('/displayDet/{id}',[CustomerController::class,'displayDet']);
Route::delete('/deleteDetails', [CustomerController::class, 'deleteDetails']);
Route::get('/getTrackingNo',[CustomerController::class,'getTrackingNo']);
Route::post('removeServices', [CustomerController::class, 'removeServices']);



//customer - transactions
Route::get('/getTransId/{id}',[CustomerController::class,'getTransId']);
Route::get('getDetails/{id}',[CustomerController::class,'getDetails']);
Route::get('checkPriceExists/{transactionId}',[CustomerController::class,'checkPriceExists']);
Route::get('checkPaymentExists/{transactionId}',[CustomerController::class,'checkPaymentExists']);
Route::post('removeServices', [CustomerController::class, 'removeServices']);
Route::get('getShippingAddress', [CustomerController::class, 'getShippingAddress']);
Route::post('insertaddress',[CustomerController::class,'insertaddress']);
Route::get('showaddress/{id}',[CustomerController::class,'showaddress']);
Route::post('addddress',[CustomerController::class,'addddress']);
Route::delete('deleteaddress/{id}',[CustomerController::class,'deleteaddress']);


//customer - account
Route::post('/updateCus', [CustomerController::class, 'updateCus']);
Route::get('/getcustomer/{id}',[CustomerController::class,'getcustomer']);
Route::post('upload/{trackingNumber}', [CustomerController::class, 'updateProfileImage']);
Route::post('insertProofOfPayment/{paymentId}', [CustomerController::class, 'insertProofOfPayment']);



// signup
Route::post('addcustomer', [CustomerController::class,'addcustomer']);



// // Customer - Login
// Route::post('logins', [CustomerController::class, 'login']);  // Public route for login
// Route::post('logout', [CustomerController::class, 'logout'])->middleware('auth:sanctum');  // Protected route for logout
// Route::post('/signup', [CustomerController::class, 'signup']);  // Public route for signup

// // Customer - Home (Require authentication for these routes)
// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/addtrans', [CustomerController::class, 'addtrans']);
//     Route::post('/insertDetails', [CustomerController::class, 'insertDetails']);
//     Route::post('/updateTransactionStatus', [CustomerController::class, 'updateStatus']);
//     Route::post('/transactions', [CustomerController::class, 'store']);
//     Route::post('/updatetrans', [CustomerController::class, 'updatetrans']);
//     Route::get('/getlist', [CustomerController::class, 'getlist']);
//     Route::get('/display/{id}', [CustomerController::class, 'display']);
//     Route::get('/gethis/{id}', [CustomerController::class, 'gethis']);
//     Route::get('/cancelTrans/{id}', [CustomerController::class, 'cancelTrans']);
//     Route::get('/updateStatus/{id}', [CustomerController::class, 'updateStatus']);
//     Route::get('/displayDet/{id}', [CustomerController::class, 'displayDet']);
//     Route::delete('/deleteDetails', [CustomerController::class, 'deleteDetails']);
//     Route::get('/getTrackingNo', [CustomerController::class, 'getTrackingNo']);

//     // Customer - Transactions (Require authentication for these routes)
//     Route::get('/getTransId/{id}', [CustomerController::class, 'getTransId']);
//     Route::get('getDetails/{id}', [CustomerController::class, 'getDetails']);

//     // Customer - Account (Require authentication for these routes)
//     Route::post('/updateCus', [CustomerController::class, 'updateCus']);
//     Route::get('/getcustomer/{id}', [CustomerController::class, 'getcustomer']);
//     Route::post('upload/{trackingNumber}', [CustomerController::class, 'updateProfileImage']);
// });

// // Signup (Public route)
// Route::post('addcustomer', [CustomerController::class, 'addcustomer']);