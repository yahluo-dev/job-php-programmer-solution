<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Containers\AppSection\Customer\Tasks\CreateCustomerGroupTask;
use App\Containers\AppSection\Customer\UI\API\Requests\CreateCustomerGroupRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateCustomerGroupAction extends ParentAction
{
    public function __construct(
        private readonly CreateCustomerGroupTask $createCustomerGroupTask,
    ) {
    }

    public function run(CreateCustomerGroupRequest $request): CustomerGroup
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createCustomerGroupTask->run($data);
    }
}
