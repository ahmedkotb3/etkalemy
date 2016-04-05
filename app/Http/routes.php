<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get("/any","HomeController@get");
Route::get('/home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/','pagescontroller@index');

Route::get('/Events','pagescontroller@tagmoatna');

Route::get('/Events/{date}','pagescontroller@tagmoatnaevent');

//Route::get('/tagmoatna-event/{id}','pagescontroller@tagmoatnaevent');

Route::get('/tagmoatna-pictures/{id}','pagescontroller@tagmoatnapictures');

Route::get('/tagmoatna-videos/{id}','pagescontroller@tagmoatnavideos');

Route::get('/tagmoatna-videoplay/{id}','pagescontroller@tagmoatnavideoplay');

Route::post('/event_comment','pagescontroller@event_comment');
Route::post('/vedio_comment','pagescontroller@vedio_comment');
Route::post('/article_comment','pagescontroller@article_comment');
Route::post('/article_comment_replay','pagescontroller@article_comment_replay');
Route::post('/save_speech_seen','pagescontroller@save_speech_seen');

Route::get('/get_event_comment/{id}','pagescontroller@get_event_comment');





Route::get('/JoinUs','pagescontroller@joinus');

Route::get('/OurWorld','pagescontroller@OurWorld');
Route::get('/OurWorld-Article/{id}','pagescontroller@OurWorldArticle');
Route::get('/OurWorld-video/{id}','pagescontroller@OurWorldvideo');
Route::get('/Gallery','pagescontroller@Gallery');
Route::get('/Gallery-event/{id}','pagescontroller@Galleryevent');
Route::get('/twitter', 'pagescontroller@twitter');


Route::get('/AdminControl','pagescontroller@showadmin');
Route::get('/Speak','pagescontroller@etkalemy');
Route::get('/ContactUs','pagescontroller@contactus');
Route::get('/About','pagescontroller@aboutus');
Route::get('/login','pagescontroller@login');
Route::get('/personalPage','pagescontroller@personalPage');
Route::get('/EditPersonalPage','pagescontroller@EditPersonalPage');

Route::get('/personalPage', [
    'middleware' => 'auth',
    'uses' => 'pagescontroller@personalPage'
]);
Route::get('/personalPage', [
    'middleware' => 'auth',
    'uses' => 'pagescontroller@personalPage'
]);
Route::get('/EditPersonalPage', [
    'middleware' => 'auth',
    'uses' => 'pagescontroller@EditPersonalPage'
]);
//Route::get('/personalPage','pagescontroller@personalPage');
//Route::get('/EditPersonalPage','pagescontroller@EditPersonalPage');

/********* Slider Routes ************/
Route::group([
    'middleware' => ['auth','operation']
], function () {
    Route::resource('/slider','SliderController');
    Route::post('/delete_slider/{id}','SliderController@delete_slider');
    Route::post('/update_slider/{id}','SliderController@update_slider');
});

//Route::resource('/slider','SliderController');
//Route::post('/delete_slider/{id}','SliderController@delete_slider');
//Route::post('/update_slider/{id}','SliderController@update_slider');

/********** Albums Routes **********/
Route::group([
    'middleware' => ['auth','operation']
], function () {
Route::resource('/gallery','GalleryController');
Route::post('/delete_album/{id}','GalleryController@delete_album');
Route::get('/images_of_album/{id}','GalleryController@images_of_album');
Route::post('/update_image_of_album/{id}','GalleryController@update_image_of_album');
Route::post('/delete_image_of_album/{id}','GalleryController@delete_image_of_album');
Route::post('/update_album/{id}','GalleryController@update_album');
Route::post('/add_image_to_album/{id}','GalleryController@add_image_to_album');
});
/************ Articales Routes ***********/
Route::group([
    'middleware' => ['auth','operation']
], function () {
    Route::resource('/article', 'ArticleController');
    Route::get('/doniana', 'ArticleController@doniana');
    Route::get('/create_vedio', 'ArticleController@create_vedio');
    Route::get('/showArticles', 'ArticleController@showArticles');
    Route::get('/showVedios', 'ArticleController@showVedios');
    Route::post('/delete_article/{id}', 'ArticleController@delete_article');
    Route::post('/delete_vedio/{id}', 'ArticleController@delete_vedio');
    Route::post('/update_article/{id}', 'ArticleController@update_article');
});
/********** Event Routes ************/
Route::group([
    'middleware' => ['auth','operation']
], function () {
Route::resource('/event','EventController');
Route::post('/delete_event/{id}','EventController@delete_event');
Route::post('/update_event/{id}','EventController@update_event');
Route::post('/add_pictures/{id}','EventController@add_pictures');
Route::post('/add_vedios/{id}','EventController@add_vedios');
Route::get('/show_images_and_vedios/{id}','EventController@show_images_and_vedios');
Route::post('/delete_image_of_event/{id}','EventController@delete_image_of_event');
Route::post('/delete_vedio_of_event/{id}','EventController@delete_vedio_of_event');
Route::post('/edit_image_of_event/{id}','EventController@edit_image_of_event');
Route::post('/edit_vedio_of_event/{id}','EventController@edit_vedio_of_event');
});
/************* User Routes *****************/

Route::resource('/user','UserController');
Route::post('/joinus','UserController@store');
Route::get('/create_login','UserController@create_login');
/*control pannel login */
Route::post('/login','UserController@login');
Route::get('/changePassword','UserController@changePassword');
Route::post('/change_user_data/{id}','UserController@change_user_data');


Route::get('/lang/{id}','LanguageController@getlang');



Route::post('/pay','PaypalController@pay');

Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

Route::post('/article_like_save','pagescontroller@article_like_save');
Route::post('/test_save_seeen','pagescontroller@test_save_seeen');
Route::post('/event_comment_replay','pagescontroller@event_comment_replay');
Route::post('/speech_comment_replay','pagescontroller@speech_comment_replay');
Route::get('/article_search/{name}','pagescontroller@article_search');
Route::get('/Article_likes_count/{id}','pagescontroller@Article_likes_count');
Route::post('/save_event_vedio_like','pagescontroller@save_event_vedio_like');
Route::get('/get_article_comments/{id}','pagescontroller@get_article_comments');
Route::get('/get_article_comment_replays/{id}','pagescontroller@get_article_comment_replays');
Route::get('/get_event_comments/{id}','pagescontroller@get_event_comments');
Route::get('/get_event_comment_replays/{id}','pagescontroller@get_event_comment_replays');
Route::get('/get_speech_comments/{id}','pagescontroller@get_speech_comments');
Route::get('/get_speech_comment_replays/{id}','pagescontroller@get_speech_comment_replays');
