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
    $activewebhosting='';
    $activewebdesign ='';
    return view('site.index',['title'=>$title,'cssclass'=>$cssclass,'activeindex'=>$activeindex,'activeContact'=>$activeContact,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting,
    'activewebdesign'=>$activewebdesign]);
});

Route::get('Contact', function()
{
    $title='Contact';
    $cssclass='innerpage lighter';
    $activeindex='';
    $activeContact='active';
    $activeAbout='';
    $activeBlog='';
    $activewebhosting='';
    $activewebdesign ='';
    return view('site.contact',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting,
    'activewebdesign'=>$activewebdesign]);
});

Route::get('About', function()
{
    $title='About';
    $cssclass='innerpage';
    $activeindex='';
    $activeContact='';
    $activeBlog='';
    $activeAbout='active';
    $activewebhosting='';
    return view('site.about',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting]);
});

Route::get('Blog', function()
{
    $title='Blog';
    $cssclass='innerpage';
    $activeindex='';
    $activeContact='';
    $activeAbout='';
    $activeBlog='active';
    $activewebhosting='';
    return view('site.blog',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting]);
});

Route::get('privacy', function()
{
    $title='Privancy';
    $cssclass='innerpage grey-bg';
    $activeindex='';
    $activeContact='';
    $activeAbout='';
    $activeBlog='';
    $activewebhosting='';
    $activewebdesign ='';
    return view('site.privacy',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting,
    'activewebdesign'=>$activewebdesign]);
});

Route::get('terms', function()
{
    $title='Privancy';
    $cssclass='innerpage grey-bg';
    $activeindex='';
    $activeContact='';
    $activeAbout='';
    $activeBlog='';
    $activewebhosting='';
    return view('site.terms',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting]);
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

Route::get('webhosting', function()
{
    $title='Web Hosting';
    $cssclass='innerpage clouds-bg';
    $activeindex='active';
    $activeContact='';
    $activeAbout='';
    $activeBlog='';
    $activewebhosting ='active';
    return view('site.webhosting',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting]);     
});

Route::get('webdesign', function()
{
    $title='Web Hosting';
    $cssclass='innerpage clouds-bg';
    $activeindex='active';
    $activeContact='';
    $activeAbout='';
    $activeBlog='';
    $activewebdesign ='active';
    $activewebhosting ='';
    return view('site.webdesign',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog,'activewebhosting'=>$activewebhosting,'activewebdesign'=>$activewebdesign]);     
});
Route::get('webapplication', function()
{
    $title='Web Application';
    $cssclass='innerpage clouds-bg';
    $activeindex='';
    $activeContact='';
    $activeAbout='';
    $activeBlog='active';
    return view('site.webapplication',['title'=>$title,'cssclass'=>$cssclass,'activeContact'=>$activeContact,'activeindex'=>$activeindex,
    'activeAbout'=>$activeAbout,'activeBlog'=>$activeBlog]);

    
    
});


Route::get('admin','AdminController@login');

Route::post('/addUser', 'UserController@addUser');