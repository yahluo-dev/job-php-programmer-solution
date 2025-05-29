<?php

namespace App\Containers\AppSection\Customer\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindCustomerGroupByIdRequest extends ParentRequest
{
    protected array $decode = ['id'];
}
