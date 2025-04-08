<?php

use ProcessMaker\Packages\Connectors\Http\Controllers\ConnectorsController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/connectors', [ConnectorsController::class, 'index'])->name('package.connectors.index');
    Route::get('connectors', [ConnectorsController::class, 'index'])->name('package.connectors.tab.index');
});
