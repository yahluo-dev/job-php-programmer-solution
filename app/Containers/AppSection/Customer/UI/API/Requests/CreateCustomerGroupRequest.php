<?php

namespace App\Containers\AppSection\Customer\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateCustomerGroupRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [
            'name'     => 'required|min:2|max:400'
        ];
    }
}
