<?php

namespace ABCCachorro\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      "puppy-number"    => "required|numeric|integer|min:1|max:5",
      "puppy-name"      => "required|string|min:1|max:250",
      "puppy-age"       => "required|numeric|integer|min:1|max:18",
      "puppy-size"      => "required|string",
      "puppy-race"      => "string|min:1|max:250",
      "your-name"       => "required|string|min:1|max:250",
      "your-email"      => "required|email|min:1|max:250",
      "your-zipcode"    => "string|min:1|max:6",
      "your-phone"      => "string|min:1|max:15",
      "privacy-policy"  => "required|accepted",
    ];
  }
}
