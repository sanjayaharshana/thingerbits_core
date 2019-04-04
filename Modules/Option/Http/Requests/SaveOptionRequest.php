<?php

namespace Modules\Option\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Option\Entities\Option;
use Modules\Core\Http\Requests\Request;

class SaveOptionRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'option::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'type' => ['required', Rule::in(Option::types)],
            'is_required' => 'required|boolean',
            'values.*.label' => 'required',
            'values.*.price' => 'nullable|numeric|min:0|max:99999999999999',
            'values.*.price_type' => ['required', Rule::in(['fixed', 'percent'])],
        ];
    }
}
