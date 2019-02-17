<?php

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

Route::get('/', function () {
    $cssclass='';
    $activeindex='active';
    $activeContact='';
    $activeAbout='';
    return view('index',['cssclass'=>$cssclass,'activeindex'=>$activeindex,'activeContact'=>$activeContact,
    'activeAbout'=>$activeAbout]);
});

Route::get('Contact', function()
{
    $cssclass='innerpage lighter';
    $activeindex='';
    $activeContact='active';
    $activeAbout='';
    return view('contact',['cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout]);
});

Route::get('About', function()
{
    $cssclass='innerpage';
    $activeindex='';
    $activeContact='';
    $activeAbout='active';
    return view('about',['cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout]);
});

Route::get('privacy', function()
{
    $cssclass='innerpage grey-bg';
    $activeindex='';
    $activeContact='';
    $activeAbout='';
    return view('privacy',['cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout]);
});