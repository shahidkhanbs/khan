<?php
use App\Mail\Vstmail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
  return view('index');
  // use app/helpers/SMS;
  // $messageText='this is test';
//$pathToFile='http://localhost/newims/public/images/alert.pdf';
  //return SMS::sendSMS($messageText,'00971553231616');
 //return Mail::to('shahidkhan409fh@gmail.com')->send(new Vstmail);
 /* Mail::send('email', [], function($message)
{
    $message->from('shahidkhan409fh@gmail.com', 'Laravel');

    $message->to('shahidkhan409fh@gmail.com')->cc('shahidkhan409fh@gmail.com');

    $message->attach('http://localhost/newims/public/images/alert.pdf');
});*/
   
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('insurancetype', 'InsuranceTypeController');

Route::resource('branches', 'BranchController');

Route::resource('ticket', 'TicketController');

Route::resource('message','MessageController');

Route::resource('sms_template','Sms_templateController');

Route::resource('send_email','SendemailController');

Route::get('sms_template/{id}','Sms_templateController@send_sms_template');

Route::resource('cms','CmsController');

Route::resource('graphics','GraphicsControllers');