<?php

use ProcessMaker\Package\Connectors\Http\Controllers\ConnectorsController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/connectors/fetch', [ConnectorsController::class, 'fetch'])->name('package.connectors.fetch');
    Route::apiResource('admin/connectors', ConnectorsController::class);
});
