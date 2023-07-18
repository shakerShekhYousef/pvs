<?php

namespace App\Http\Requests\dashboard\Car;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'maker' => ['required', 'string'],
            'model' => ['required', 'string'],
            'year' => ['required', 'string'],
            'regional_specs' => ['required', 'string'],
            'color' => ['required', 'string'],
            'doors' => ['required', 'string'],
            'body_condition' => ['required', 'string'],
            'mechanical_condition' => ['required', 'string'],
            'interior_color' => ['required', 'string'],
            'seller_type' => ['required', 'string'],
            'body_type' => ['required', 'string'],
            'no_cylinders' => ['required', 'numeric'],
            'transmission_type' => ['required', 'string'],
            'horse_power' => ['required', 'string'],
            'fuel_type' => ['required', 'string'],
            'extras' => ['required', 'string'],
            'whatsapp_uae' => ['required', 'string'],
            'whatsapp_africa' => ['required', 'string'],
            'price_aed' => ['required', 'numeric'],
            'price_africa' => ['required', 'numeric'],
            'price_dealer_aed' => ['required', 'numeric'],
            'price_dealer_africa' => ['required', 'numeric'],
            'steering_side' => ['required', 'string'],
            'image' => ['required', 'mimes:jpg,png,jpeg,gif,webp', 'max:2000'],
            'description' => ['nullable', 'string'],
            'car_images.*' => ['nullable', 'mimes:jpg,png,jpeg,gif,webp'],
        ];
    }
}
