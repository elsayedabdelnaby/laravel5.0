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

##### passing array of data 
return view('pages.about', $data);

##### passing data using compact function
return view('pages.about', compact('name', 'data'));