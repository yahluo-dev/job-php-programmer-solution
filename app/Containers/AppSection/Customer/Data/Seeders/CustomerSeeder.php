<?php

namespace App\Containers\AppSection\Customer\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use App\Containers\AppSection\Customer\Models\Customer;
use App\Containers\AppSection\Customer\Models\CustomerGroup;

final class CustomerSeeder extends ParentSeeder
{
    public function run(): void
    {
        $customers = Customer::factory()->count(10)->create();
        $groups = CustomerGroup::factory()->count(3)->create();
        $customers[0]->customer_groups()->attach($groups[0]->id);
        $customers[1]->customer_groups()->attach($groups[0]->id);
        $customers[2]->customer_groups()->attach($groups[0]->id);
        $customers[4]->customer_groups()->attach($groups[1]->id);
        $customers[5]->customer_groups()->attach($groups[1]->id);
        $customers[6]->customer_groups()->attach($groups[2]->id);
    }
}
