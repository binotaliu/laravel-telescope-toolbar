<?php

Route::get('render/{token}', 'ToolbarController@render')->name('telescope-toolbar.render');
Route::get('show/{token}/{tab?}', 'ToolbarController@show')->name('telescope-toolbar.show');