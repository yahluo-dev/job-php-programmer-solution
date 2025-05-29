<?php

namespace App\Containers\AppSection\Customer\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class UpdateCustomerRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [
            'id'     => 'required|decimal',
            'name'     => 'min:2|max:400',
            'email'    => 'email|max:200'
        ];
    }
}
