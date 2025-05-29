<?php

namespace App\Containers\AppSection\Customer\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use App\Containers\AppSection\Customer\Models\Customer;

final class CustomerSeeder extends ParentSeeder
{
    public function run(): void
    {
        Customer::factory()->count(10)->create();
    }
}
