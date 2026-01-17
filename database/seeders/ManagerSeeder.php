<?php

namespace Database\Seeders;

use App\Models\Manager;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
   public function run(): void
    {
        Manager::insert([
            [
                'id' => 1,
                'name' => 'John Smith',
                'email' => 'john.smith@company.com',
                'phone_number' => '0901000001',
                'hire_date' => '2018-01-10',
                'salary' => 6000,
                'commission_pct' => 10,
            ],
            [
                'id' => 2,
                'name' => 'Emily Johnson',
                'email' => 'emily.johnson@company.com',
                'phone_number' => '0901000002',
                'hire_date' => '2019-03-15',
                'salary' => 5500,
                'commission_pct' => 8,
            ],
            [
                'id' => 3,
                'name' => 'Michael Brown',
                'email' => 'michael.brown@company.com',
                'phone_number' => '0901000003',
                'hire_date' => '2017-07-01',
                'salary' => 6500,
                'commission_pct' => 12,
            ],
            [
                'id' => 4,
                'name' => 'Sarah Wilson',
                'email' => 'sarah.wilson@company.com',
                'phone_number' => '0901000004',
                'hire_date' => '2020-02-20',
                'salary' => 5200,
                'commission_pct' => 9,
            ],
            [
                'id' => 5,
                'name' => 'David Miller',
                'email' => 'david.miller@company.com',
                'phone_number' => '0901000005',
                'hire_date' => '2016-11-05',
                'salary' => 7000,
                'commission_pct' => 15,
            ],
            [
                'id' => 6,
                'name' => 'Linda Taylor',
                'email' => 'linda.taylor@company.com',
                'phone_number' => '0901000006',
                'hire_date' => '2021-06-01',
                'salary' => 5000,
                'commission_pct' => 7,
            ],
        ]);
    }
}
