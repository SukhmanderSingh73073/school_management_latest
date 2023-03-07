<?php

namespace App\Http\Controllers;

use App\Models\AccountApplication;
use App\Models\ClassGroup;
use App\Models\MyClass;
use App\Models\School;
use App\Models\Section;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TestController extends Controller
{
  



    function testing(){
      $items = AccountApplication::orderBy('applicant_type')->get(); 
      return $items ;

    }
}
