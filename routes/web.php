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
    $title='INOVORA';
    $cssclass='';
    $activeindex='active';
    $activeContact='';
    $activeAbout='';
    $activeBlog='';
    return view('site.index',['title'=>$title,'cssclass'=>$cssclass,'activeindex'=>$activeindex,'activeContact'=>$activeContact,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog]);
});

Route::get('Contact', function()
{
    $title='Contact';
    $cssclass='innerpage lighter';
    $activeindex='';
    $activeContact='active';
    $activeAbout='';
    $activeBlog='';
    return view('site.contact',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog]);
});

Route::get('About', function()
{
    $title='About';
    $cssclass='innerpage';
    $activeindex='';
    $activeContact='';
    $activeBlog='';
    $activeAbout='active';
    return view('site.about',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog]);
});

Route::get('Blog', function()
{
    $title='Blog';
    $cssclass='innerpage';
    $activeindex='';
    $activeContact='';
    $activeAbout='';
    $activeBlog='active';
    return view('site.blog',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog]);
});

Route::get('privacy', function()
{
    $title='Privancy';
    $cssclass='innerpage grey-bg';
    $activeindex='';
    $activeContact='';
    $activeAbout='';
    return view('site.privacy',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog]);
});

Route::get('Login', function()
{
    $title='Login';
    $loginactive='active';
    $registeractive='';
    return view('site.login',['title'=>$title,'loginactive'=>$loginactive,'registeractive'=>$registeractive]);
});

Route::get('Register', function()
{
    $title='Register';
    $registeractive='active';
    $loginactive='';
    return view('site.register',['title'=>$title,'registeractive'=>$registeractive,'loginactive'=>$loginactive]);
});

Route::get('admin','AdminController@login');

Route::post('/addUser', 'UserController@addUser');