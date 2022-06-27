<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\Menu\MenuGroupController;
use App\Http\Controllers\Menu\MenuItemController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleAndPermission\AssignPermissionController;
use App\Http\Controllers\RoleAndPermission\AssignUserToRoleController;
use App\Http\Controllers\RoleAndPermission\ExportPermissionController;
use App\Http\Controllers\RoleAndPermission\ExportRoleController;
use App\Http\Controllers\RoleAndPermission\ImportPermissionController;
use App\Http\Controllers\RoleAndPermission\ImportRoleController;
use App\Http\Controllers\RoleAndPermission\PermissionController;
use App\Http\Controllers\RoleAndPermission\RoleController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProdukController;

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

// Route::get('/', function () {
//     return view('user-template.index');
// });

Route::get('/', [UserProdukController::class,'index']);
Route::get('/produk', [UserProdukController::class,'produk']);

Route::get('/detail-kopi', function () {
    return view('detail.detailEsKopiSusu');
});
Route::get('/detail-greentea', function () {
    return view('detail.greenTea');
});
Route::get('/detail-redvelvet', function () {
    return view('detail.redVelvet');
});
Route::get('/detail-taro', function () {
    return view('detail.taro');
});
Route::get('/addCart', function () {
    return view('cart.cart');
});

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/dashboard', function () {
        return view('home', ['users' => User::get(),]);
    })->name('dashboard');
    //user list

    Route::prefix('user-management')->group(function () {
        Route::resource('user', UserController::class);
        Route::post('import', [UserController::class, 'import'])->name('user.import');
        Route::get('export', [UserController::class, 'export'])->name('user.export');
        Route::get('demo', DemoController::class)->name('user.demo');

    });

    Route::prefix('menu-management')->group(function () {
        Route::resource('menu-group', MenuGroupController::class);
        Route::resource('menu-item', MenuItemController::class);
    });
    Route::group(['prefix' => 'role-and-permission'], function () {
        //role
        Route::resource('role', RoleController::class);
        Route::get('role/export', ExportRoleController::class)->name('role.export');
        Route::post('role/import', ImportRoleController::class)->name('role.import');

        //permission
        Route::resource('permission', PermissionController::class);
        Route::get('permission/export', ExportPermissionController::class)->name('permission.export');
        Route::post('permission/import', ImportPermissionController::class)->name('permission.import');

        //assign permission
        Route::get('assign', [AssignPermissionController::class, 'index'])->name('assign.index');
        Route::get('assign/create', [AssignPermissionController::class, 'create'])->name('assign.create');
        Route::get('assign/{role}/edit', [AssignPermissionController::class, 'edit'])->name('assign.edit');
        Route::put('assign/{role}', [AssignPermissionController::class, 'update'])->name('assign.update');
        Route::post('assign', [AssignPermissionController::class, 'store'])->name('assign.store');

        //assign user to role
        Route::get('assign-user', [AssignUserToRoleController::class, 'index'])->name('assign.user.index');
        Route::get('assign-user/create', [AssignUserToRoleController::class, 'create'])->name('assign.user.create');
        Route::post('assign-user', [AssignUserToRoleController::class, 'store'])->name('assign.user.store');
        Route::get('assing-user/{user}/edit', [AssignUserToRoleController::class, 'edit'])->name('assign.user.edit');
        Route::put('assign-user/{user}', [AssignUserToRoleController::class, 'update'])->name('assign.user.update');
    });
});

// Produk
Route::prefix('produk-management')->group(function(){
    Route::resource('produk' ,ProdukController::class);
    Route::post('import', [ProdukController::class, 'import'])->name('produk.import');
    Route::get('export', [ProdukController::class, 'export'])->name('produk.export');
});
//update profile
Route::resource('profile' ,ProfileController::class)->only('update', 'edit');
// add to cart
Route::resource('cart' , CartController::class);
