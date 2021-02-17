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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'studentController@index');
Route::get('/single_student/{id}', 'studentController@show_student');
Route::get('/attendance', 'studentController@show_all_attendance');
Route::get('attendance/{id}', 'studentController@student_attendance');
// Route::get('register', function(){
//     return view('dashboard.register');
// });
Route::get('/register', 'userController@index');
Route::post('/create', 'userController@store');
Route::get('/delete/{id}', 'userController@destroy');
Route::get('/edit/{id}', 'userController@edit');
Route::post('/update/{id}', 'userController@update');



/*
|--------------------------------------------------------------------------
| Creating a fnction to execute raw sql queries
|--------------------------------------------------------------------------
*/
/*
//Inserting data
Route::get('insert', function(){
    // $insert =
    DB::insert('insert into users (academy_id,  first_name, last_name, email, password) values (?, ?, ?, ?, ?)', ['25B', 'Adam', 'Abusamra', 'adamabusamra@gmail.com', '123456']);
    // if($insert){
    //     echo"DB successfully queried";
    // }else{
    //     echo"DB query failed";
    // }
});

//Reading data
Route::get('select', function(){
$results = DB::select('select * from users where academy_id=?',['25B']);
// dd($results);
foreach($results as $user){
    echo $user->first_name ;
}

});

// Route::get('select', function(){
//     $results = DB::select('select * from users');
//     // dd($results);
//     foreach($results as $user){
//         echo $user->first_name."<br>";
// }

// });


 */
/*
|--------------------------------------------------------------------------
| Querying the DB using ORM / Eloquent
|--------------------------------------------------------------------------
*/
