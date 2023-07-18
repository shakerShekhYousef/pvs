<?php

namespace App\Http\Requests\dashboard\Car;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateCarRequest extends FormRequest
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
            'maker' => ['nullable', 'string'],
            'model' => ['nullable', 'string'],
            'year' => ['nullable', 'string'],
            'regional_specs' => ['nullable', 'string'],
            'color' => ['nullable', 'string'],
            'doors' => ['nullable', 'string'],
            'body_condition' => ['nullable', 'string'],
            'mechanical_condition' => ['nullable', 'string'],
            'interior_color' => ['nullable', 'string'],
            'seller_type' => ['nullable', 'string'],
            'body_type' => ['nullable', 'string'],
            'no_cylinders' => ['nullable', 'numeric'],
            'transmission_type' => ['nullable', 'string'],
            'horse_power' => ['nullable', 'string'],
            'fuel_type' => ['nullable', 'string'],
            'extras' => ['nullable', 'string'],
            'steering_side' => ['nullable', 'string'],
            'whatsapp_uae' => ['nullable', 'string'],
            'whatsapp_africa' => ['nullable', 'string'],
            'price_aed' => ['nullable', 'numeric'],
            'price_africa' => ['nullable', 'numeric'],
            'price_dealer_aed' => ['nullable', 'numeric'],
            'price_dealer_africa' => ['nullable', 'numeric'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg,gif,webp', 'max:2000'],
            'description' => ['nullable', 'string'],
            'car_images.*' => ['nullable', 'mimes:jpg,png,jpeg,gif,webp'],
        ];
    }
}
