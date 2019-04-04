<?php

namespace Modules\Attribute\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\Request;

class SaveAttributeRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'attribute::attributes.attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'attribute_set_id' => ['required', Rule::exists('attribute_sets', 'id')],
            'name' => 'required',
            'is_filterable' => 'required|boolean',
        ];
    }

    /**
     * Get data to be validated from the request.
     *
     * @return array
     */
    protected function validationData()
    {
        return request()->merge([
            'values' => $this->filter($this->values ?? []),
        ])->all();
    }

    /**
     * Filter attribute values.
     *
     * @param array $values
     * @return array
     */
    private function filter($values = [])
    {
        return array_filter($values, function ($value) {
            return ! is_null($value['value']);
        });
    }
}
