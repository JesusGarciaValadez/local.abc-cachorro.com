<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'discounts', function ( Blueprint $table )
    {
      $table->increments( 'id' );

      $table->text( "puppy-number" );
      $table->text( "puppy-name" );
      $table->text( "puppy-age" );
      $table->text( "puppy-size" );
      $table->text( "puppy-race" );
      $table->text( "your-name" );
      $table->text( "your-email" );
      $table->text( "your-zipcode" );
      $table->text( "your-phone" );

      $table->timestamps();
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists( 'discounts' );
  }
}
