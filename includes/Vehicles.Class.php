<?php

class Vehicles
{
  /**
   * Set up some properties for your class.
   * 
   * Properties can be public, protected, or private.
   */
  public $Model_ID = '';
  public $Make_Name = '';
  public $Model_Name = '';
  

  function __construct ( $Model_ID = false, $Make_Name = false, $Model_Name = false) {
    if ( is_integer( $Model_ID ) ) {
        $this->Model_ID = $Model_ID;
      }
    if ( is_string( $Make_Name ) ) {
      $this->Make_Name = $Make_Name;
    }
    if ( is_string( $Model_Name ) ) {
      $this->Model_Name = $Model_Name;
    }
  }


  
}