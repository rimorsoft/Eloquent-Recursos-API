<?php

namespace App\Http\Requests;

//use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Contracts\Validation\Validator;
//use Illuminate\Validation\ValidationException;
//use Illuminate\Http\Exceptions\HttpResponseException;

class Post extends FormRequest
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
            'title' => 'required',
            'body'  => 'required',
        ];
    }
    /**
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
    */
}
