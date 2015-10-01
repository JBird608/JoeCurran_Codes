<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @property mixed title
 */
class ArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check() && Auth::user()->level > 50){
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'        => 'required|min:8|max:120',
            'body'         => 'required',
            'publish'      => 'required|date',
            'category'     => 'required|exists:article_categories,id',
            'slug'         => 'regex:/^[a-z0-9_ ]+$/i',
        ];
    }
}
