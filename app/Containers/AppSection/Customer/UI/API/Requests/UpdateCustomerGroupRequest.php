<?php

namespace App\Containers\AppSection\Customer\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class UpdateCustomerGroupRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [
            'id'     => 'required',
            'name'     => 'min:2|max:400'
        ];
    }
}
