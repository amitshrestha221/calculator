<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});


Route::get('add/{a}/{b}', 'Amitshrestha\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Amitshrestha\Calculator\CalculatorController@subtract');
Route::get('multiply/{a}/{b}', 'Amitshrestha\Calculator\CalculatorController@multiply');
Route::get('divide/{a}/{b}', 'Amitshrestha\Calculator\CalculatorController@divide');
Route::get('root/{a}', 'Amitshrestha\Calculator\CalculatorController@root');
Route::get('factorial/{a}', 'Amitshrestha\Calculator\CalculatorController@factorial');

