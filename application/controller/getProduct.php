<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

global $registerIssue;
global $currentProductId;


class getProduct extends Controller
{
    
   
  public function index(Type $var = null)
  {
      # code...
      $products = $this->model->getAllProduct();

      print_r($products[0]->id);
  }


}

