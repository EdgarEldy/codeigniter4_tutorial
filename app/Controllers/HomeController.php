<?php
namespace App\Controllers;
use CodeIgniter\Controller;

/**
 *
 */
class HomeController extends Controller
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
