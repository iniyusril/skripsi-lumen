<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/hello', 'HelloController@index');
$router->get('/departments', 'DepartmentsController@index');
$router->get('/dept-emp', 'CurrentDepartmentsController@index');
$router->get('/dept-manager', 'DepartmentsManagerController@index');
$router->get('/employees', 'EmployeesController@index');
$router->get('/salaries', 'SalariesController@index');
$router->get('/titles', 'TitlesController@index');
//calculate
$router->get('/fibonanci','HelloController@compute');
//one to many
$router->get('/employees-salaries', 'OneToManyController@EmployeeSalaries');
$router->get('/employees-titles', 'OneToManyController@EmployeeTitles');

//many to many 
$router->get('/department-manager', 'ManyToManyController@DepartmentManager');
$router->get('/department-employee', 'ManyToManyController@DepartmentEmployee');




//$router->get('/dept-emp-lastest-date', 'DepartmentsEmployeeLastestDateController@index');
// $router->get('/current-departments', 'CurrentDepartmentsController@index');