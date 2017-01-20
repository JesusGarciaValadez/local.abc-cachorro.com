<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FormTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function testSendExample()
  {
    $this->visit( env( 'APP_URL' ) . '/home' )
         ->seePageIs( env( 'APP_URL' ) . '/home' )
         ->type( '1', "puppy-number" )
         ->type( 'Krispy', "puppy-name" )
         ->select( '4', "puppy-age" )
         ->select( 'medium', "puppy-size" )
         ->type( 'Común', "puppy-race" )
         ->type( 'Jesús García', "your-name" )
         ->type( 'jesus.garcia@lunave.com', "your-email" )
         ->type( '03600', "your-zipcode" )
         ->type( '55555555', "your-phone" )
         ->check( "privacy-policy" )
         ->press( 'Registrarnos' )
         ->seeInDatabase( 'discounts', [
            "puppy-number",
            "puppy-name",
            "puppy-age",
            "puppy-size",
            "puppy-race",
            "your-name",
            "your-email",
            "your-zipcode",
            "your-phone",

            "puppy-number"    => "1",
            "puppy-name"      => "Krispy",
            "puppy-age"       => "4",
            "puppy-size"      => "medium",
            "puppy-race"      => "Común",
            "your-name"       => "Jesús García",
            "your-email"      => "jesus.garcia@lunave.com",
            "your-zipcode"    => "03600",
            "your-phone"      => "55555555",
            "privacy-policy"  => "true"
          ] );
  }
}
