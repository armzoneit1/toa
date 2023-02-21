<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webpanel as Webpanel;
//====================  ====================
//================  Backend ================
//====================  ====================


// Route::get('webpanel/login', [Webpanel\AuthController::class, 'getLogin']);
// Route::post('webpanel/login', [Webpanel\AuthController::class, 'postLogin']);
// Route::get('webpanel/logout', [Webpanel\AuthController::class, 'logOut']);
// Route::get('member/logout', [Webpanel\AuthController::class, 'logOut']);

// $html = "<div class='modal fade' id='qrcode{$data->id}' aria-hidden='true' aria-labelledby='exampleModalToggleLabel'
//                 tabindex='-1'>
//                 <div class='modal-dialog modal-dialog-centered'>
//                 <div class='modal-content'>
//                     <div class='modal-header'
//                     <h5 class='modal-title' id='exampleModalToggleLabel'>QR Code</h5>
//                     <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
//                     </div>
//                     <div class='modal-body' id='insert-zone'>
//                     <center>{!! QrCode::size(300)->generate(url('zone/{$data->id}')) !!}</center>
//                     </div>
//                 </div>
//                 </div>
//             </div>";

Route::group(['middleware' => ['Admin']], function () {

    Route::prefix('webpanel')->group(function () {

        Route::get('/', function (){
            return redirect('webpanel/overview');
        });

        Route::post('/setting/{id}', [Webpanel\SetController::class, 'store']);
        Route::get('change_theme', [Webpanel\SetController::class, 'change_theme']);
        Route::get('/emergency', [Webpanel\SetController::class, 'emergency']);
        Route::get('/emergency/{id}', [Webpanel\SetController::class, 'deleteEmergency'])->where(['id' => '[0-9]+']);

        Route::prefix('overview')->group(function () {
            Route::get('/', [Webpanel\OverviewController::class, 'index']);
            Route::get('/{id}', [Webpanel\OverviewController::class, 'get_layout'])->where(['id' => '[0-9]+']);
            Route::get('/zone/{id}', [Webpanel\OverviewController::class, 'get_zone'])->where(['id' => '[0-9]+']);
            Route::get('/zone1/{id}', [Webpanel\OverviewController::class, 'get_zone1'])->where(['id' => '[0-9]+']);
            Route::get('/destroy', [Webpanel\OverviewController::class, 'destroy']);
            Route::post('/volume/{zone_id}', [Webpanel\OverviewController::class, 'adjustVolume']);
            Route::post('/select-source/{zone_id}', [Webpanel\OverviewController::class, 'selectSource']);
            Route::get('/apply-volume', [Webpanel\OverviewController::class, 'save']);
            Route::post('/song-status/{id}', [Webpanel\OverviewController::class, 'songStatus']);
            Route::get('/current-song', [Webpanel\OverviewController::class, 'getCurrentSong']);
            Route::get('/current-song/{id}', [Webpanel\OverviewController::class, 'getCurrentSong']);
            Route::post('/get_status_play/{id}', [Webpanel\OverviewController::class, 'getplayandpause']);
            Route::post('/forwardmusic/{id}', [Webpanel\OverviewController::class, 'forwardmusic']);
            Route::post('/backwardmusic/{id}', [Webpanel\OverviewController::class, 'backwardmusic']);
            Route::post('/musicrun/{id}', [Webpanel\OverviewController::class, 'musicrunnow']);
            Route::get('/broadcast',function ()
            {
                broadcast(new \App\Events\playsong("OKOPKAOWO"));
            });
            Route::get('/broadcast1',function ()
            {
                broadcast(new \App\Events\checkPlayMusic("OKOPKAOWO"));
            });
        });

        Route::prefix('pre-record')->group(function () {
            Route::get('/', [Webpanel\RecordController::class, 'index']);
            Route::post('/', [Webpanel\RecordController::class, 'insert']);
            Route::get('/latest', [Webpanel\RecordController::class, 'latestRecord']);
            Route::get('/latest/{id}', [Webpanel\RecordController::class, 'getUpdateRecord'])->where(['id' => '[0-9]+']);
            Route::get('/emergency', [Webpanel\RecordController::class, 'emergency']);
            Route::get('/emergency/{id}', [Webpanel\RecordController::class, 'deleteEmergency']);
            Route::get('/record', [Webpanel\RecordController::class, 'recordData']);
            Route::get('/repeat/{id}', [Webpanel\RecordController::class, 'recordRepeat'])->where(['id' => '[0-9]+']);
            Route::get('/task_repeat/{id}', [Webpanel\RecordController::class, 'taskRepeat'])->where(['id' => '[0-9]+']);
            Route::get('/day_repeat/{id}', [Webpanel\RecordController::class, 'taskDay'])->where(['id' => '[0-9]+']);
            Route::post('/{id}', [Webpanel\RecordController::class, 'update'])->where(['id' => '[0-9]+']);
            Route::get('/destroy', [Webpanel\RecordController::class, 'destroy']);
            Route::post('/active/{id}', [Webpanel\RecordController::class, 'taskActive'])->where(['id' => '[0-9]+']);
        });

        Route::prefix('manage-account')->group(function () {
            Route::get('/', [Webpanel\AccountController::class, 'index']);
            Route::post('/', [Webpanel\AccountController::class, 'insert']);
            Route::post('/{id}', [Webpanel\AccountController::class, 'update'])->where(['id' => '[0-9]+']);
            Route::get('/destroy', [Webpanel\AccountController::class, 'destroy']);
        });

        Route::prefix('layout-plan')->group(function () {
            Route::get('/', [Webpanel\LayoutPlanController::class, 'index']);
            Route::post('/', [Webpanel\LayoutPlanController::class, 'insert_layout']);
            Route::post('/{id}', [Webpanel\LayoutPlanController::class, 'update_layout'])->where(['id' => '[0-9]+']);
            Route::get('/check-duplicate', [Webpanel\LayoutPlanController::class, 'check_duplicate']);
            Route::get('/check-duplicate/{id}', [Webpanel\LayoutPlanController::class, 'check_duplicate'])->where(['id' => '[0-9]+']);
            Route::get('/destroy', [Webpanel\LayoutPlanController::class, 'destroy_layout']);
            Route::get('/qrcode/{id}', [Webpanel\LayoutPlanController::class, 'genQrcode'])->where(['id' => '[0-9]+']);
            Route::get('/img/{id}', [Webpanel\LayoutPlanController::class, 'get_image'])->where(['id' => '[0-9]+']);
            Route::post('/{layout_id}/zone', [Webpanel\LayoutPlanController::class, 'insert_zone'])->where(['layout_id' => '[0-9]+']);
            Route::post('/{layout_id}/zone/{id}', [Webpanel\LayoutPlanController::class, 'update_zone'])->where(['layout_id' => '[0-9]+'])->where(['id' => '[0-9]+']);
            Route::get('/{layout_id}/get_zone', [Webpanel\LayoutPlanController::class, 'get_zone'])->where(['layout_id' => '[0-9]+']);
            Route::get('/zone/destroy', [Webpanel\LayoutPlanController::class, 'destroy_zone']);
        });
    });
});
?>
