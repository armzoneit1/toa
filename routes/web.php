<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webpanel as Webpanel;
use App\Http\Controllers\Member as Member;
use App\Http\Controllers\Frontend as Frontend;
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

//========== Session Lang (กรณี 2 ภาษา) ============
// Route::get('/set/lang/{lang}', [Frontend\HomeController::class, 'setLang']);
// Route::get('/', function () {
//     $default = 'th';
//     $lang = Session('lang');
//     if ($lang == "") {
//         Session::put('lang', $default);
//         return redirect("/$default");
//     } else {
//         return redirect("/$lang");
//     }
// });
// Route::group(['middleware' => ['Language']], function () {
//     $locale = ['th', 'en', 'jp'];
//     foreach ($locale as $lang) {
//         Route::prefix($lang)->group(function () {
//             Route::get('', [Frontend\HomeController::class, 'index']);
//         });
//     }
// });
//========== Session Lang ============


// Route
Route::get('', [Webpanel\AuthController::class, 'getLogin']);
Route::post('', [Webpanel\AuthController::class, 'postLogin']);
Route::get('/logout', [Webpanel\AuthController::class, 'logOut']);
Route::get('/zone-guest/{id}', [Frontend\HomeController::class, 'zone_guest'])->where(['id' => '[0-9]+']);
Route::get('check_recordfire', [Frontend\HomeController::class, 'check_recordfire']);
Route::get('/broadcast',function ()
{
    broadcast(new \App\Events\playsong("OKOPKAOWO"));
});

Route::get('/broadcast1',function ()
{
    broadcast(new \App\Events\checkPlayMusic("OKOPKAOWO"));
});

Route::get('/broadcast2',function ()
{
    broadcast(new \App\Events\realtimedata("OKOPKAOWO"));
});

//Route::get('/broadcast3',function ()
//{
//    broadcast(new \App\Events\zoneall("OKOPKAOWO"));
//});
Route::get('/broadcast3',function ()
{
    broadcast(new \App\Events\zoneselect("OKOPKAOWO"));
});

Route::get('/broadcast4',function ()
{
    broadcast(new \App\Events\layoutandzone("OKOPKAOWO"));
});

Route::get('/broadcast5',function ()
{
    broadcast(new \App\Events\checkhome("OKOPKAOWO"));
});

Route::group(['middleware' => ['Login']], function () {

    require('web-backend.php');

    Route::group(['middleware' => ['User']], function () {

        Route::prefix('home')->group(function () {
            Route::get('/', [Frontend\HomeController::class, 'home']);
            Route::get('/zone/{id}', [Frontend\HomeController::class, 'getZone'])->where(['id' => '[0-9]+']);
            Route::get('/check-new', [Frontend\HomeController::class, 'checkHome']);
            Route::post('/select-source/{id}', [Frontend\HomeController::class, 'selectSource']);
        });

        Route::get('change_theme', [Webpanel\SetController::class, 'change_theme']);

        Route::prefix('overview')->group(function () {
            Route::get('/', [Frontend\HomeController::class, 'overview']);
            Route::get('/{id}', [Frontend\HomeController::class, 'getImg'])->where(['id' => '[0-9]+']);
            Route::get('/zone/{id}', [Frontend\HomeController::class, 'getZone'])->where(['id' => '[0-9]+']);
            Route::get('/check-new', [Frontend\HomeController::class, 'checkNewComing']);
            Route::post('/select-source/{id}', [Frontend\HomeController::class, 'selectSource']);
        });

        Route::prefix('push-to-talk')->group(function () {
            Route::get('/', [Frontend\HomeController::class, 'push_to_talk']);
            Route::post('/', [Frontend\HomeController::class, 'record']);
            Route::post('/temp-audio', [Frontend\HomeController::class, 'tempAudio']);
        });
    });

});

Route::prefix('zone')->group(function () {
    Route::get('/{id}', [Frontend\HomeController::class, 'zone'])->where(['id' => '[0-9]+']);
    Route::get('/{id}/volume', [Frontend\HomeController::class, 'zone'])->where(['id' => '[0-9]+']);
    Route::post('/{id}/volume', [Frontend\HomeController::class, 'adjustVolume'])->where(['id' => '[0-9]+']);
    Route::get('/{id}/this-zone', [Frontend\HomeController::class, 'getZoneById'])->where(['id' => '[0-9]+']);
    Route::get('/{id}/apply-volume', [Frontend\HomeController::class, 'save'])->where(['id' => '[0-9]+']);
    Route::post('/{id}/select-source', [Frontend\HomeController::class, 'selectSource'])->where(['id' => '[0-9]+']);
    Route::get('/{id}/current-song', [Frontend\HomeController::class, 'getCurrentSong']);
    Route::post('/{id}/get_status_play/{source}', [Frontend\HomeController::class, 'getplayandpause']);
    Route::post('/{id}/forwardmusic/{source}', [Frontend\HomeController::class, 'forwardmusic']);
    Route::post('/{id}/backwardmusic/{source}', [Frontend\HomeController::class, 'backwardmusic']);
    Route::post('/{id}/musicrun/{source}', [Frontend\HomeController::class, 'musicrunnow']);
    Route::post('/{id}/song-status', [Frontend\HomeController::class, 'songStatus']);
    Route::get('/{id}/broadcast',function ()
    {
        broadcast(new \App\Events\playsong("OKOPKAOWO"));
    });
    Route::get('/{id}/broadcast1',function ()
    {
        broadcast(new \App\Events\checkPlayMusic("OKOPKAOWO"));
    });
});

