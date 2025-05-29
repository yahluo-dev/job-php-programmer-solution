<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Models\CustomerGroup;
use App\Containers\AppSection\Customer\Tasks\UpdateCustomerGroupTask;
use App\Containers\AppSection\Customer\UI\API\Requests\UpdateCustomerGroupRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateCustomerGroupAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCustomerGroupTask $updateCustomerGroupTask,
    ) {
    }

    public function run(UpdateCustomerGroupRequest $request): CustomerGroup
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateCustomerGroupTask->run($data, $request->id);
    }
}
