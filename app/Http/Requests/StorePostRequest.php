<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Article;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $articleId = $this->route()->parameter('id');

        switch($this->method())
    {
        case 'GET':
        case 'DELETE':
        {
            return [];
        }
        case 'POST':
        {
            return [
                'name' => 'required|unique:articles',
                'body' => 'required|min:500',
            ];
        }
        case 'PUT':
        case 'PATCH':
        {
            return [
                'name' => 'required|unique:articles,name,{$articleId}',
                'body' => 'required|min:500',
            ];
        }
        default:break;
    }
    }
}
