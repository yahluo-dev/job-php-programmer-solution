<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Ship\Parents\Actions\Action as ParentAction;
use App\Containers\AppSection\Customer\UI\API\Requests\AttachCustomerToGroupRequest;
use App\Containers\AppSection\Customer\Models\Customer;
use App\Containers\AppSection\Customer\Tasks\AttachCustomerToGroupTask;

final class AttachCustomerToGroupAction extends ParentAction
{

    public function __construct(
        private readonly AttachCustomerToGroupTask $attachCustomerToGroupTask
    ) {
    }

    public function run(AttachCustomerToGroupRequest $request): Customer
    {
        $data = $request->sanitize([
            'id',
        ]);

        return $this->attachCustomerToGroupTask->run($data, $request->customer_id);
    }
}
