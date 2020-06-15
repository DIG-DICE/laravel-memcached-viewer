<?php

Route::any('/', [
    'as' => 'index',
    'uses' => 'MemcachedViewerController@index',
]);
