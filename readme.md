## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
"# laravel5.0"


### Make localhost:8888 redirect to public folder automatically
php -S localhost:8888 -t public

make a public folder is a root document 

## Controller
#### create controller
php artisan make:controller controller-name   		//create a not empty controller

php artisan make:controller controller-name --plain //create an empty controller

php artisan help make:controller  					//this command to display all controller command's options


#### controller passes data to view
$name = 'sayed alaraby';
$data = [];
$data['first'] = 'sayed';
$data['last'] = 'alaraby';

##### passing data using with function
return view('pages.about')->with('name', $name);
##### passing data using with compact
return view('pages.about', compact('name'));

##### passing array of data 
return view('pages.about', $data);

##### passing data using compact function
return view('pages.about', compact('name', 'data'));

## Master Page
laravel has app.blade.php file it's a master page which any view extends from it,
master page has sections allow user to write contents on it

#### defination section
@yield('section-name');
Ex: @yield('content');

#### use section on view
@section('section-name');
Ex: 
@yield('content')
//write your code here
@stop

you can create more than one section on master page

## Configuration Files
Laravel has a config folder which hold all configruations file

####  app.php
Hold all configuration informations about my app look like timezone, url and so on

#### database.php
Hold array contain all database connections which you want to deal with it
you can add any connection to this array as you want

##Database
Laravel has a migration folder and migration package which make tracking for database

####mirgation
migration file has two functions up & down call up when need to create table and down when need to delete table
#####up execute when excute migration and it's hold code to create a database table
#####down execute when rollback mirgation and it's hold code to delete a database table
####php artisan migrate
this command used to execute codes which exist on create functions of migrations files or
create DB tables
####php artisan make:migration create_articles_table --create="articles"
this command create a migration file which create table called articles
###add a new column to DB table
####php artisan make:migration add_excerpt_to_articles --table="articles"
this command create a migration file that add excerpt column to articles table

##Model
this is a class that's handle all functions of object
####php artisan make:model Article
create a model called Article, also create a migration file for article model
once create model must define a fillable array which hold all columns of tables which allow to Insert/Update it on DB

##Controller
controller hold all methods which handle http request with all types (GET, POST, PUT/PATCH, DELETE)
####php artisan make:controller ArticlesController
this command create Controller Called ArticlesController
###index function
handle GET request for all data
###show function
handle GET request with specific id

##View
the view file which receive the data from controller and display to users



###the difference between find and findOrFail functions
####find
return null of object not found/exist,
you must handle it by using is_null function and return 404 error

if(is_null(Article::find($id))){
	abort(404);
}
####findOrFail
through ModelNotFoundException if object not found automatically, not need to use is_null,
you can work directly

$article = findOrFail($id);
return view('articles.show', compact('article'));

###href
can create href in laravel by passing data directly, action and url functions
####create url directly
href="articles/{{$article->id}}"
####by action function
can use href to execute a specific function
href="{{action('ArticlesController@show', [$article->id])}}"
####by url function
href="{{url('/articles', $article->id)}}"

##Form
to deal with form, need to install illuminate/html package
####composer require illuminate/html
this command used to install html package