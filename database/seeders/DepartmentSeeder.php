<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
   public function run(): void
    {
        Department::insert([
            ['id'=>1,'department_name'=>'Information Technology','location'=>'Head Office','manager_id'=>1],
            ['id'=>2,'department_name'=>'Human Resources','location'=>'Head Office','manager_id'=>2],
            ['id'=>3,'department_name'=>'Accounting','location'=>'Head Office','manager_id'=>3],
            ['id'=>4,'department_name'=>'Sales','location'=>'Branch Office','manager_id'=>4],
            ['id'=>5,'department_name'=>'Marketing','location'=>'Branch Office','manager_id'=>5],
            ['id'=>6,'department_name'=>'Operations','location'=>'Warehouse','manager_id'=>6],
        ]);
    }
}
