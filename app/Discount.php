<?php

namespace ABCCachorro;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    "puppy-number",
    "puppy-name",
    "puppy-age",
    "puppy-size",
    "puppy-race",
    "your-name",
    "your-email",
    "your-zipcode",
    "your-phone",
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $guarded  = [ 'id', 'created_at', 'updated_at' ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden   = [ ];
}
