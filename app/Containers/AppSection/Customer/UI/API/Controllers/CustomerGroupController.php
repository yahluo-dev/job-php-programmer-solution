<?php

namespace App\Containers\AppSection\Customer\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Customer\Actions\CreateCustomerGroupAction;
use App\Containers\AppSection\Customer\Actions\DeleteCustomerGroupAction;
use App\Containers\AppSection\Customer\Actions\FindCustomerGroupByIdAction;
use App\Containers\AppSection\Customer\Actions\ListCustomerGroupsAction;
use App\Containers\AppSection\Customer\Actions\UpdateCustomerGroupAction;
use App\Containers\AppSection\Customer\UI\API\Requests\CreateCustomerGroupRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\DeleteCustomerGroupRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\FindCustomerGroupByIdRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\ListCustomerGroupsRequest;
use App\Containers\AppSection\Customer\UI\API\Requests\UpdateCustomerGroupRequest;
use App\Containers\AppSection\Customer\UI\API\Transformers\CustomerGroupTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CustomerGroupController extends ApiController
{
    public function create(CreateCustomerGroupRequest $request, CreateCustomerGroupAction $action): JsonResponse
    {
       $customerGroup = $action->run($request);

       return Response::create($customerGroup, CustomerGroupTransformer::class)->created();
    }

    public function findById(FindCustomerGroupByIdRequest $request, FindCustomerGroupByIdAction $action): JsonResponse
    {
        $customerGroup = $action->run($request);

        return Response::create($customerGroup, CustomerGroupTransformer::class)->ok();
    }

    public function list(ListCustomerGroupsRequest $request, ListCustomerGroupsAction $action): JsonResponse
    {
        $customerGroups = $action->run($request);

        return Response::create($customerGroups, CustomerGroupTransformer::class)->ok();
    }

    public function update(UpdateCustomerGroupRequest $request, UpdateCustomerGroupAction $action): JsonResponse
    {
        $customerGroup = $action->run($request);

        return Response::create($customerGroup, CustomerGroupTransformer::class)->ok();
    }

    public function delete(DeleteCustomerGroupRequest $request, DeleteCustomerGroupAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
