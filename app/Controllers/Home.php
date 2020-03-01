<?php
namespace App\Controllers;
/**
 *
 */
class Home extends BaseController
{

  function __construct()
  {
    // code...
  }

  public function index()
  {
    // code...
    return view('home/index');
  }
}


 ?>
