<?php

Route::get('/', [\App\Http\Controllers\CmsController::class, 'index'])
        ->name('taraf');

Route::get('/request', [\App\Http\Controllers\CmsController::class, 'requestproduct'])
        ->name('requestproduct');

Route::get('/about', [\App\Http\Controllers\CmsController::class, 'about'])
        ->name('about');
Route::get('/products', [\App\Http\Controllers\CmsController::class, 'product'])
        ->name('products');
        Route::get('/products/{product}', [\App\Http\Controllers\CmsController::class, 'showProduct'])
                ->name('show.product');

Route::get('/blog', [\App\Http\Controllers\CmsController::class, 'blog'])
        ->name('blog');
Route::get('/contact', [\App\Http\Controllers\CmsController::class, 'contact'])
        ->name('contact');

Route::get('/blog/{post}', [\App\Http\Controllers\CmsController::class, 'show'])
        ->name('show.post');


Route::redirect('/admin', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

 // Requested Product
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

        Route::delete('requested-products/destroy', 'RequestedProductController@massDestroy')->name('requested-products.massDestroy');
        Route::resource('requested-products', 'RequestedProductController');
 });

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

     // About
    Route::delete('abouts/destroy', 'AboutController@massDestroy')->name('abouts.massDestroy');
    Route::post('abouts/media', 'AboutController@storeMedia')->name('abouts.storeMedia');
    Route::post('abouts/ckmedia', 'AboutController@storeCKEditorImages')->name('abouts.storeCKEditorImages');
    Route::resource('abouts', 'AboutController');
    
    // About Us
    Route::delete('aboutuses/destroy', 'AboutUsController@massDestroy')->name('aboutuses.massDestroy');
    Route::post('aboutuses/media', 'AboutUsController@storeMedia')->name('aboutuses.storeMedia');
    Route::post('aboutuses/ckmedia', 'AboutUsController@storeCKEditorImages')->name('aboutuses.storeCKEditorImages');
    Route::resource('aboutuses', 'AboutUsController');

    // Social Media Link
    Route::delete('social-media-links/destroy', 'SocialMediaLinkController@massDestroy')->name('social-media-links.massDestroy');
    Route::resource('social-media-links', 'SocialMediaLinkController');

    // Category
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::post('categories/media', 'CategoryController@storeMedia')->name('categories.storeMedia');
    Route::post('categories/ckmedia', 'CategoryController@storeCKEditorImages')->name('categories.storeCKEditorImages');
    Route::resource('categories', 'CategoryController');

    // Product
    Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');
    Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');
    Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');
    Route::resource('products', 'ProductController');

    // Gallery
    Route::delete('galleries/destroy', 'GalleryController@massDestroy')->name('galleries.massDestroy');
    Route::post('galleries/media', 'GalleryController@storeMedia')->name('galleries.storeMedia');
    Route::post('galleries/ckmedia', 'GalleryController@storeCKEditorImages')->name('galleries.storeCKEditorImages');
    Route::resource('galleries', 'GalleryController');

    // Value
    Route::delete('values/destroy', 'ValueController@massDestroy')->name('values.massDestroy');
    Route::post('values/media', 'ValueController@storeMedia')->name('values.storeMedia');
    Route::post('values/ckmedia', 'ValueController@storeCKEditorImages')->name('values.storeCKEditorImages');
    Route::resource('values', 'ValueController');

    // Mission
    Route::delete('missions/destroy', 'MissionController@massDestroy')->name('missions.massDestroy');
    Route::post('missions/media', 'MissionController@storeMedia')->name('missions.storeMedia');
    Route::post('missions/ckmedia', 'MissionController@storeCKEditorImages')->name('missions.storeCKEditorImages');
    Route::resource('missions', 'MissionController');

    // Goal
    Route::delete('goals/destroy', 'GoalController@massDestroy')->name('goals.massDestroy');
    Route::post('goals/media', 'GoalController@storeMedia')->name('goals.storeMedia');
    Route::post('goals/ckmedia', 'GoalController@storeCKEditorImages')->name('goals.storeCKEditorImages');
    Route::resource('goals', 'GoalController');

    // Service
    Route::delete('services/destroy', 'ServiceController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServiceController@storeMedia')->name('services.storeMedia');
    Route::post('services/ckmedia', 'ServiceController@storeCKEditorImages')->name('services.storeCKEditorImages');
    Route::resource('services', 'ServiceController');

    // Contact
    Route::delete('contacts/destroy', 'ContactController@massDestroy')->name('contacts.massDestroy');
    Route::post('contacts/media', 'ContactController@storeMedia')->name('contacts.storeMedia');
    Route::post('contacts/ckmedia', 'ContactController@storeCKEditorImages')->name('contacts.storeCKEditorImages');
    Route::resource('contacts', 'ContactController');

    // Setting
    Route::delete('settings/destroy', 'SettingController@massDestroy')->name('settings.massDestroy');
    Route::post('settings/media', 'SettingController@storeMedia')->name('settings.storeMedia');
    Route::post('settings/ckmedia', 'SettingController@storeCKEditorImages')->name('settings.storeCKEditorImages');
    Route::resource('settings', 'SettingController');

    // Client
    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');
    Route::post('clients/media', 'ClientController@storeMedia')->name('clients.storeMedia');
    Route::post('clients/ckmedia', 'ClientController@storeCKEditorImages')->name('clients.storeCKEditorImages');
    Route::resource('clients', 'ClientController');

    // Post
    Route::delete('posts/destroy', 'PostController@massDestroy')->name('posts.massDestroy');
    Route::post('posts/media', 'PostController@storeMedia')->name('posts.storeMedia');
    Route::post('posts/ckmedia', 'PostController@storeCKEditorImages')->name('posts.storeCKEditorImages');
    Route::resource('posts', 'PostController');

    // Vision
    Route::delete('visions/destroy', 'VisionController@massDestroy')->name('visions.massDestroy');
    Route::post('visions/media', 'VisionController@storeMedia')->name('visions.storeMedia');
    Route::post('visions/ckmedia', 'VisionController@storeCKEditorImages')->name('visions.storeCKEditorImages');
    Route::resource('visions', 'VisionController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
