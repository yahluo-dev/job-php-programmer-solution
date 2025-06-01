<?php

namespace App\Containers\AppSection\Customer\Tasks;

use App\Ship\Parents\Tasks\Task as ParentTask;
use App\Containers\AppSection\Customer\Models\Customer;
use App\Containers\AppSection\Customer\Models\CustomerGroup;

final class AttachCustomerToGroupTask extends ParentTask
{
    public function __construct()
    {
    }

    public function run(array $data, int $customer_id): Customer
    {
        try {
            $customer = Customer::findOrFail($customer_id);
            $customerGroup = CustomerGroup::findOrFail($data['id']);

            $customer->customer_groups()->attach($data['id']);

            return $customer->load('customer_groups');
        } catch (ModelNotFoundException $e) {
            throw new \Exception('Customer or CustomerGroup not found.');
        } catch (\Exception $e) {
            throw new \Exception('Failed to attach Customer to Group: ' . $e->getMessage());
        }
    }
}
