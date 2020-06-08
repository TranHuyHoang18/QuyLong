<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'filemanager', 'middleware' => ['auth:admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('admin')->group(function()
{
    // Tai khoan
    Route::get('/','Admin\AdminController@index')->name('admin');
    Route::get('/register', 'Admin\AdminController@create')->name('admin.register');
    Route::post('/register', 'Admin\AdminController@store')->name('admin.register.store');
    Route::get('/login','Admin\AdminLoginController@showLoginForm')->name('admin.auth.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout/', 'Admin\AdminLoginController@logout')->name('admin.logout');
    Route::post('/logout', 'Admin\AdminLoginController@logout')->name('admin.auth.logout');
    Route::get('/media','Admin\MediaController@index')->name('admin.media.index');
    // quản trị gmail cần hỗ trợ
    Route::group(['prefix'=>'newsletter'],function()
    {
        Route::get('/','Admin\NewsLetterController@index')->name('admin.newsletter.index');
        Route::get('/delete/{id}','Admin\NewsLetterController@destroy')->name('admin.newsletter.delete');
    });
    // Quản trị bài viết
    Route::group(['prefix'=>'news'],function()
    {
        Route::get('/','Admin\NewsController@index')->name('admin.news.index');
        Route::get('/add','Admin\NewsController@add')->name('admin.news.add');
        Route::post('/add','Admin\NewsController@store')->name('admin.news.store');
        Route::get('/detail/{id}','Admin\NewsController@detail')->name('admin.news.detail');
        Route::get('/edit/{id}','Admin\NewsController@edit')->name('admin.news.edit');
        Route::post('/edit/{id}','Admin\NewsController@update')->name('admin.news.update');
        Route::get('/delete/{id}','Admin\NewsController@destroy')->name('admin.news.delete');
    });
    // Quản trị tư vấn hỗ trợ
    Route::group(['prefix'=>'tuvan'],function()
    {
        Route::get('/','Admin\TuVanController@index')->name('admin.tuvan.index');
        Route::get('/gmail/answer/{id}','Admin\TuVanController@answer')->name('admin.tuvan.answer');
        Route::get('/detail/{id}','Admin\TuVanController@detail')->name('admin.tuvan.detail');
        Route::get('/delete/{id}','Admin\TuVanController@destroy')->name('admin.tuvan.delete');
        Route::get('/edit/{id}','Admin\NewsController@edit')->name('admin.tuvan.edit');
        Route::post('/edit/{id}','Admin\NewsController@update')->name('admin.tuvan.update');

    });
    // quản trị blog
    Route::group(['prefix'=>'blog'],function()
    {
        Route::get('/','Admin\BlogController@index')->name('admin.blog.index');
        // Quản trị danh mục Blog
        Route::group(['prefix'=>'danh-muc'],function() {
            Route::get('/', 'Admin\Blog\CategoryController@index')->name('admin.blog.category.index');
            Route::get('/add','Admin\Blog\CategoryController@add')->name('admin.blog.category.add');
            Route::post('/add','Admin\Blog\CategoryController@store')->name('admin.blog.category.store');
            Route::get('/edit/{id}','Admin\Blog\CategoryController@edit')->name('admin.blog.category.edit');
            Route::post('/edit/{id}','Admin\Blog\CategoryController@update')->name('admin.blog.category.update');
            Route::get('/delete/{id}','Admin\Blog\CategoryController@destroy')->name('admin.blog.category.delete');

        });
        // Quản trị bài viết Blog
        Route::group(['prefix'=>'bai-viet'],function() {
            Route::get('/', 'Admin\Blog\PageController@index')->name('admin.blog.page.index');
            Route::get('/add','Admin\Blog\PageController@add')->name('admin.blog.page.add');

            Route::post('/add','Admin\Blog\PageController@store')->name('admin.blog.page.store');
            Route::get('/detail/{id}','Admin\Blog\PageController@detail')->name('admin.blog.page.detail');
            Route::get('/edit/{id}','Admin\Blog\PageController@edit')->name('admin.blog.page.edit');
            Route::post('/edit/{id}','Admin\Blog\PageController@update')->name('admin.blog.page.update');
            Route::get('/delete/{id}','Admin\Blog\PageController@destroy')->name('admin.blog.page.delete');

        });

    });
    // Quản trị tuyển dụng
    Route::group(['prefix'=>'tuyen-dung'],function()
    {
        Route::get('/','Admin\TuyenDungController@index')->name('admin.tuyendung.index');
        // Quản trị danh mục tuyển dụng
        Route::group(['prefix'=>'danh-muc'],function() {
            Route::get('/', 'Admin\TuyenDung\CategoryController@index')->name('admin.tuyendung.category.index');
            Route::get('/add','Admin\TuyenDung\CategoryController@add')->name('admin.tuyendung.category.add');
            Route::post('/add','Admin\TuyenDung\CategoryController@store')->name('admin.tuyendung.category.store');
            Route::get('/edit/{id}','Admin\TuyenDung\CategoryController@edit')->name('admin.tuyendung.category.edit');
            Route::post('/edit/{id}','Admin\TuyenDung\CategoryController@update')->name('admin.tuyendung.category.update');
            Route::get('/delete/{id}','Admin\TuyenDung\CategoryController@destroy')->name('admin.tuyendung.category.delete');

        });
        // Quản trị bài viết Tuyen dung
        Route::group(['prefix'=>'bai-viet'],function() {
            Route::get('/', 'Admin\TuyenDung\PageController@index')->name('admin.tuyendung.page.index');
            Route::get('/add','Admin\TuyenDung\PageController@add')->name('admin.tuyendung.page.add');
            Route::post('/add','Admin\TuyenDung\PageController@store')->name('admin.tuyendung.page.store');
            Route::get('/detail/{id}','Admin\TuyenDung\PageController@detail')->name('admin.tuyendung.page.detail');
            Route::get('/edit/{id}','Admin\TuyenDung\PageController@edit')->name('admin.tuyendung.page.edit');
            Route::post('/edit/{id}','Admin\TuyenDung\PageController@update')->name('admin.tuyendung.page.update');
            Route::get('/delete/{id}','Admin\TuyenDung\PageController@destroy')->name('admin.tuyendung.page.delete');
        });


    });
    // setting
    Route::group(['prefix'=>'setting'],function()
    {
        Route::get('/','Admin\SettingController@index')->name('admin.setting.index');
        // Quản trị bài viết Tuyen dung
        Route::group(['prefix'=>'contact'],function() {
            Route::get('/', 'Admin\Setting\ConTactController@index')->name('admin.setting.contact.index');
            Route::post('/edit','Admin\Setting\ConTactController@update')->name('admin.setting.contact.update');
        });


    });

    Route::get('/address','Admin\AddressController@InitCSDL');
    // Dich vu
    Route::group(['prefix'=>'dich-vu'],function()
    {

        // Quản trị bài viết
        Route::group(['prefix'=>'bai-viet'],function() {
            Route::get('/', 'Admin\DichVu\PageController@index')->name('admin.dichvu.page.index');
            Route::get('/add','Admin\DichVu\PageController@add')->name('admin.dichvu.page.add');
            Route::post('/add','Admin\DichVu\PageController@store')->name('admin.dichvu.page.store');
            Route::get('/detail/{id}','Admin\DichVu\PageController@detail')->name('admin.dichvu.page.detail');
            Route::get('/edit/{id}','Admin\DichVu\PageController@edit')->name('admin.dichvu.page.edit');
            Route::post('/edit/{id}','Admin\DichVu\PageController@update')->name('admin.dichvu.page.update');
            Route::get('/delete/{id}','Admin\DichVu\PageController@destroy')->name('admin.dichvu.page.delete');
        });
    });
    // Gias cuoc
    Route::group(['prefix'=>'gia-cuoc'],function()
    {
        // Quản trị danh mục
        Route::group(['prefix'=>'danh-muc'],function() {
            Route::get('/', 'Admin\GiaCuoc\CategoryController@index')->name('admin.giacuoc.category.index');

        });
        // Quản trị bài viết
        Route::group(['prefix'=>'bai-viet'],function() {
            Route::get('/', 'Admin\GiaCuoc\PageController@index')->name('admin.giacuoc.page.index');
            Route::get('/add','Admin\GiaCuoc\PageController@add')->name('admin.giacuoc.page.add');
            Route::post('/add','Admin\GiaCuoc\PageController@store')->name('admin.giacuoc.page.store');
            Route::get('/detail/{id}','Admin\GiaCuoc\PageController@detail')->name('admin.giacuoc.page.detail');
            Route::get('/edit/{id}','Admin\GiaCuoc\PageController@edit')->name('admin.giacuoc.page.edit');
            Route::post('/edit/{id}','Admin\GiaCuoc\PageController@update')->name('admin.giacuoc.page.update');
            Route::get('/delete/{id}','Admin\GiaCuoc\PageController@destroy')->name('admin.giacuoc.page.delete');
        });


    });
});


Auth::routes();

// Route Frontend
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

// đăng kí nhận tin mới nhất
Route::group(['prefix'=>'newsletter'],function()
{
    Route::post('/add','Front\NewsLetterController@store')->name('front.newsletter.store');
});

Route::group(['prefix'=>'transport'],function()
{
    Route::post('/support','Front\TransController@store')->name('front.transSP.store');
});
// gui mail
Route::get('laravel-send-email', 'EmailController@sendEMail');
// Blog
Route::group(['prefix'=>'blog'],function()
{
    Route::get('/','Front\BlogController@index')->name('front.blog.index');
    Route::get('/{id}','Front\BlogController@index1');
    Route::get('/{id}/{ik}','Front\BlogController@index2');

    Route::group(['prefix'=>'cam-nang-van-chuyen'],function()
    {
        Route::get('/','Front\BlogController@camnang');
        Route::group(['prefix'=>'huong-dan-gui-hang'],function()
        {
            Route::get('/','Front\BlogController@HDguihang');
            Route::get('/details','Front\BlogController@a_z');
        });
    });
});
//Tuyen dung
Route::group(['prefix'=>'tuyen-dung'],function()
{
    Route::get('/','Front\TuyenDungController@index')->name('front.tuyendung.index');
    Route::get('/danh-muc/{slug}','Front\TuyenDungController@danhmuc')->name('front.tuyendung.danhmuc');
    Route::get('/bai-viet/{slug_cate}/{slug_pages}','Front\TuyenDungController@detail')->name('front.tuyendung.detail');
});
// lien he
Route::group(['prefix'=>'lien-he'],function()
{
    Route::get('/','Front\LienHeController@index')->name('front.lienhe.index');
});
// tra cuu
Route::group(['prefix'=>'tra-cuu'],function ()
{
    Route::get('/','Front\TraCuuController@index')->name('front.tracuu.index');
    Route::get('/gia-cuoc-van-chuyen','Front\TraCuuController@giacuoc')->name('front.tracuu.giacuoc');
    Route::get('/van-don-van-chuyen','Front\TraCuuController@vandon')->name('front.tracuu.vandon');
    Route::get('/diem-gui-hang','Front\TraCuuController@diemguihang')->name('front.tracuu.diemguihang');
});
// dich vu
Route::group(['prefix'=>'dich-vu'],function ()
{
    Route::get('/','Front\DichVuController@index')->name('front.dichvu.index');
    Route::get('/van-chuyen-nhanh','Front\DichVuController@VCnhanh')->name('front.dichvu.CVnhanh');
    Route::get('/van-chuyen-tiet-kiem','Front\DichVuController@VCtietkiem')->name('front.dichvu.VCtietkiem');
    Route::get('/van-chuyen-xe-may','Front\DichVuController@VCxemay')->name('front.dichvu.VCxemay');
    Route::get('/van-chuyen-o-to','Front\DichVuController@VCoto')->name('front.dichvu.VCoto');
    Route::get('/van-chuyen-thu-cung','Front\DichVuController@VCthucung')->name('front.dichvu.VCthucung');
    Route::get('/chuyen-nha-tron-goi-toan-quoc','Front\DichVuController@Chuyennha')->name('front.dichvu.Chuyennha');
    Route::get('/bai-viet/{slug_cate}/{slug_page}','Front\DichVuController@detail')->name('front.dichvu.detail');
});
// gia cuoc

Route::group(['prefix'=>'gia-cuoc'],function ()
{
    Route::get('/','Front\GiaCuocController@index')->name('front.giacuoc.index');
    Route::get('/{slug_cate}','Front\GiaCuocController@category')->name('front.giacuoc.category');
    Route::get('/{slug_cate}/{slug_page}','Front\GiaCuocController@detail')->name('front.giacuoc.detail');
});
