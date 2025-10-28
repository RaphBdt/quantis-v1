<?php

namespace App\Http\Requests;

use App\Enums\AssetType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AssetFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type' => ['required', Rule::enum(AssetType::class)],
            'net_worth' => ['required', 'numeric', 'min:0'],
            'yield' => ['required', 'numeric', 'min:-100', 'max:100'],
            'monthly_investment' => ['nullable', 'numeric', 'min:0'],
            'monthly_rent' => ['nullable', 'numeric', 'min:0'],
            'scenario_id' => ['required', 'exists:scenarios,id'],
        ];
    }
}
