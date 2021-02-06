
<?php
Route::get('contact', 'ContactFormController@index');
Route::post('contact', 'ContactFormController@sendMail')->name('contact');
