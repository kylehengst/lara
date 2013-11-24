<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	
//	$user = DB::table('employees')
//			->select('LastName','Country')
//			->whereBetween('EmployeeID',array('1','4'))
//			->orderBy('EmployeeID','DESC')
//			->get();
//	
//	foreach($user as $u)
//	{
//		var_dump($u);
//	}
	
//	$user = DB::select('select * from employees where Country = ?',array('United Kingdom'));
//	
//	DB::insert('insert into test (fname, lname) values (?,?)');
//	
//	dd($user);
	
	
	$title = 'L4 Basics';
	return View::make('home.index')
			->with('title',$title);
	
});

Route::get('person',function(){
	
	$persons = Person::all();
	
	dd($persons);
});

Route::get('create',function(){
	
	$users = DB::table('test')->get();
	
	return View::make('home.create')->with('users',$users);
	
});

Route::post('test',function(){
	
	$input = Input::all();
	

	
	$validator = Validator::make($input,Person::$rules,Person::$messages);
	
	if($validator->passes())
	{
		$user = new Person;
		$user->fname = $input['fname'];
		$user->lname = $input['lname'];
		$user->save();
		
//		DB::table('test')->insert(array('fname'=>$input['fname'],'lname'=>$input['lname']));
		
		return Redirect::to('/');
	}
	else
	{
		return Redirect::to('/')
				->withInput()
				->withErrors($validator)
				->with('message');
	}
	
//	DB::insert('insert into test (fname,lname) value (?,?)',array($input['fname'],$input['lname']));
	
	
	
});

Route::get('about',function(){
	$title = 'About';
	return View::make('home.about')
			->with('title',$title);
});

Route::resource('photo', 'PhotoController');


Route::group(array('domain' => '{account}.myapp.com'), function()
{

    Route::get('user/{id}', function($account, $id)
    {
        //
    });

});

Route::get('foo', array('https', function()
{
    return 'Must be over HTTPS';
}));



Route::resource('posts', 'PostsController');