<?php

Route::get('/api/v1/getline', 'Cb\Linez\Controllers\Lines@getLine');
Route::get('/api/v1/getvibes', 'Cb\Linez\Controllers\Vibes@getVibes');
Route::get('/api/v1/getlocations', 'Cb\Linez\Controllers\Locations@getLocations');
Route::get('/api/v1/gethaircolors', 'Cb\Linez\Controllers\HairColors@getHairColors');
