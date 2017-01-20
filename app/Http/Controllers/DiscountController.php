<?php

namespace ABCCachorro\Http\Controllers;

use Illuminate\Http\Request;
use ABCCachorro\Http\Requests\DiscountRequest;

use ABCCachorro\Discount;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view( 'home' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      dd( 'create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( DiscountRequest $request )
    {
      $data = $request->only( "puppy-number", "puppy-name", "puppy-age", "puppy-size", "puppy-race", "your-name", "your-email", "your-zipcode", "your-phone" );

      $registry   = new Discount( $data );
      $operation  = $registry->save();

      if ( $operation )
      {
        $response = [ 'code' => '0', 'message' => 'success' ];
      }
      else
      {
        $response = [ 'code' => '1', 'message' => 'error' ];
      }

      return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
      dd( 'show' );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
      dd( 'edit' );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
      dd( 'update' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
      dd( 'destroy' );
    }
}
