<?php

Route::get('/', 'PagesController@welcome');

Route::get('cards', 'CardsController@getAllCards');