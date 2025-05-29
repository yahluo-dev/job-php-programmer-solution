<?php

namespace App\Containers\AppSection\Customer\Actions;

use App\Containers\AppSection\Customer\Tasks\ListCustomerGroupsTask;
use App\Containers\AppSection\Customer\UI\API\Requests\ListCustomerGroupsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCustomerGroupsAction extends ParentAction
{
    public function __construct(
        private readonly ListCustomerGroupsTask $listCustomerGroupsTask,
    ) {
    }

    public function run(ListCustomerGroupsRequest $request): mixed
    {
        return $this->listCustomerGroupsTask->run();
    }
}
