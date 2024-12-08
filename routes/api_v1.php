<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\{
    UserController,
    GuestController,
    RoomController,
    BookingController,
    ExpenseController,
    PaymentController,
    FinancialReportController,
};


// Shared API Routes for All Authenticated Users with Specific Roles
Route::middleware('auth:sanctum')->group(function () {

    // Shared Routes for Admin, Manager, and Accountant
    Route::apiResource('bookings', BookingController::class);
    Route::apiResource('guests', GuestController::class);
    Route::apiResource('rooms', RoomController::class);

    Route::get('/expenses', [ExpenseController::class, 'index']); // Add this line for GET requests
    Route::post('/expenses', [ExpenseController::class, 'store']); // Existing POST route
    Route::put('/expenses/{id}', [ExpenseController::class, 'update']);

    Route::apiResource('payments', PaymentController::class); // View Payments
    Route::apiResource('users', UserController::class);
    Route::prefix('bookingsQuery')->group(function () {
        Route::get('today', [BookingController::class, 'getBookingsToday']);
    });

    // Route for generating financial report
    Route::get('/financial-report', [FinancialReportController::class, 'generateReport']);

    // Role-Specific Routes
    Route::middleware('role:admin')->group(function () {
        Route::apiResource('financial-reports', FinancialReportController::class); // CRUD
    });

    Route::middleware('role:manager')->group(function () {

        Route::apiResource('financial-reports', FinancialReportController::class); // CRUD for Manager
    });
});
