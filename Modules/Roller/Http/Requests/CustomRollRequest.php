<?php
namespace Modules\Roller\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CustomRollRequest
 * @package Modules\Roller\Http\Requests
 */
class CustomRollRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [

            'dice' =>'required|integer'
        ];
    }

}