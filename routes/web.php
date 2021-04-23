<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', 'Frontend\FrontenController@index') -> name('users.view');
Route::get('/about-us', 'Frontend\FrontenController@aboutUs') -> name('about.us');
Route::get('/misson', 'Frontend\FrontenController@Misson') -> name('our.misson');
Route::get('/visson', 'Frontend\FrontenController@Visson') -> name('our.visson');
Route::get('/news-event', 'Frontend\FrontenController@newsEvent') -> name('news.event');
Route::get('/news-event/details/{id}', 'Frontend\FrontenController@newsDetails') -> name('news.event.details');
Auth::routes();
Route::get('/home', 'HomeController@index') -> name('home');

Route::prefix('users')->middleware(['test'])->group(function (){
    
        Route::get('/view', 'Backend\UserController@viewUser')-> name('users.view');
        Route::get('/add', 'Backend\UserController@addUser')-> name('users.add');
        Route::get('/edit/{id}', 'Backend\UserController@editUser') -> name('users.edit');
        Route::get('/delete/{id}', 'Backend\UserController@deleteUser') -> name('users.delete');
        Route::post('/update/{id}', 'Backend\UserController@updateUser') -> name('users.update');
        Route::post('/store', 'Backend\UserController@storeUser') -> name('users.store');
      
    });

// });



Route::prefix('profiles')->middleware(['test'])->group(function (){

    Route::get('/view', 'Backend\ProfileController@viewProfile') -> name('profiles.view');
    Route::get('/edit/{id}', 'Backend\ProfileController@editProfile') -> name('profiles.edit');
    Route::post('/store', 'Backend\ProfileController@updateProfile') -> name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordView') -> name('profiles.passwordView');
    Route::post('/password/update/', 'Backend\ProfileController@passwordUpdate') -> name('profiles.passwordUpdate');
  
});

Route::prefix('logos')->group(function(){

    Route::get('/view', 'Backend\LogoController@viewLogo') -> name('logos.view');
    Route::get('/add', 'Backend\LogoController@addLogo') -> name('logos.add');
    Route::get('/edit/{id}', 'Backend\LogoController@editLogo') -> name('logos.edit');
    Route::get('/delete/{id}', 'Backend\LogoController@deleteLogo') -> name('logos.delete');
    Route::post('/update/{id}', 'Backend\LogoController@updateLogo') -> name('logos.update');
    Route::post('/store', 'Backend\LogoController@storeLogo') -> name('logos.store');
  
});
Route::prefix('sliders')->group(function(){

    Route::get('/view', 'Backend\SliderController@viewSlider') -> name('sliders.view');
    Route::get('/add', 'Backend\SliderController@addSlider') -> name('sliders.add');
    Route::get('/edit/{id}', 'Backend\SliderController@editSlider') -> name('sliders.edit');
    Route::get('/delete/{id}', 'Backend\SliderController@deleteSlider') -> name('sliders.delete');
    Route::post('/update/{id}', 'Backend\SliderController@updateSlider') -> name('sliders.update');
    Route::post('/store', 'Backend\SliderController@storeSlider') -> name('sliders.store');
  
});
Route::prefix('missons')->group(function(){

    Route::get('/view', 'Backend\MissonController@viewMisson') -> name('missons.view');
    Route::get('/add', 'Backend\MissonController@addMisson') -> name('missons.add');
    Route::get('/edit/{id}', 'Backend\MissonController@editMisson') -> name('missons.edit');
    Route::get('/delete/{id}', 'Backend\MissonController@deleteMisson') -> name('missons.delete');
    Route::post('/update/{id}', 'Backend\MissonController@updateMisson') -> name('missons.update');
    Route::post('/store', 'Backend\MissonController@storeMisson') -> name('missons.store');
  
});
Route::prefix('vissons')->group(function(){

    Route::get('/view', 'Backend\VissonController@viewVisson') -> name('vissons.view');
    Route::get('/add', 'Backend\VissonController@addVisson') -> name('vissons.add');
    Route::get('/edit/{id}', 'Backend\VissonController@editVisson') -> name('vissons.edit');
    Route::get('/delete/{id}', 'Backend\VissonController@deleteVisson') -> name('vissons.delete');
    Route::post('/update/{id}', 'Backend\VissonController@updateVisson') -> name('vissons.update');
    Route::post('/store', 'Backend\VissonController@storeVisson') -> name('vissons.store');
  
});
Route::prefix('services')->group(function(){

    Route::get('/view', 'Backend\ServiceController@viewService') -> name('services.view');
    Route::get('/add', 'Backend\ServiceController@addService') -> name('services.add');
    Route::get('/edit/{id}', 'Backend\ServiceController@editService') -> name('services.edit');
    Route::get('/delete/{id}', 'Backend\ServiceController@deleteService') -> name('services.delete');
    Route::post('/update/{id}', 'Backend\ServiceController@updateService') -> name('services.update');
    Route::post('/store', 'Backend\ServiceController@storeService') -> name('services.store');
  
});
Route::prefix('contracts')->group(function(){

    Route::get('/view', 'Backend\ContractController@viewContract') -> name('contracts.view');
    Route::get('/add', 'Backend\ContractController@addContract') -> name('contracts.add');
    Route::get('/edit/{id}', 'Backend\ContractController@editContract') -> name('contracts.edit');
    Route::get('/delete/{id}', 'Backend\ContractController@deleteContract') -> name('contracts.delete');
    Route::post('/update/{id}', 'Backend\ContractController@updateContract') -> name('contracts.update');
    Route::post('/store', 'Backend\ContractController@storeContract') -> name('contracts.store');
  
});
Route::prefix('abouts')->group(function(){

    Route::get('/view', 'Backend\AboutController@viewAbout') -> name('abouts.view');
    Route::get('/add', 'Backend\AboutController@addAbout') -> name('abouts.add');
    Route::get('/edit/{id}', 'Backend\AboutController@editAbout') -> name('abouts.edit');
    Route::get('/delete/{id}', 'Backend\AboutController@deleteAbout') -> name('abouts.delete');
    Route::post('/update/{id}', 'Backend\AboutController@updateAbout') -> name('abouts.update');
    Route::post('/store', 'Backend\AboutController@storeAbout') -> name('abouts.store');
  
});
Route::prefix('news_events')->group(function(){

    Route::get('/view', 'Backend\NewsEventController@viewNewsEvent') -> name('news_events.view');
    Route::get('/add', 'Backend\NewsEventController@addNewsEvent') -> name('news_events.add');
    Route::get('/edit/{id}', 'Backend\NewsEventController@editNewsEvent') -> name('news_events.edit');
    Route::get('/delete/{id}', 'Backend\NewsEventController@deleteNewsEvent') -> name('news_events.delete');
    Route::post('/update/{id}', 'Backend\NewsEventController@updateNewsEvent') -> name('news_events.update');
    Route::post('/store', 'Backend\NewsEventController@storeNewsEvent') -> name('news_events.store');
  
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
