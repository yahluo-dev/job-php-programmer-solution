<?php

namespace App\Containers\AppSection\Customer\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class DeleteCustomerRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
