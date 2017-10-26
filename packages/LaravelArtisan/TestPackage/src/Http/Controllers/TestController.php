<?php

namespace LaravelArtisan\TestPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelArtisan\TestPackage\Models\Test;


class TestController extends Controller
{
  

  	public function test(){

  			return view('TestPackage::test');;
  	}
  	public function createTest(Test $test){

  			$test->name = 'Raja';
  			$test->password = bcrypt('123456');
  			$test->email = 'raja@email.com';

  			$test->save();

  			return 'test created';
  	}
}
