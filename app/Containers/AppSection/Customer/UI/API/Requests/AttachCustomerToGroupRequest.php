<?php

namespace App\Containers\AppSection\Customer\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class AttachCustomerToGroupRequest extends ParentRequest
{
    protected array $decode = ['customer_id'];

    public function rules(): array
    {
        return [];
    }
}
