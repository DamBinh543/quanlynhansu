<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::insert([
            // IT
            ['id'=>1,'job_title'=>'Software Engineer','min_salary'=>1500,'max_salary'=>3500,'department_id'=>1],
            ['id'=>2,'job_title'=>'Backend Developer','min_salary'=>1800,'max_salary'=>4000,'department_id'=>1],
            ['id'=>3,'job_title'=>'Frontend Developer','min_salary'=>1600,'max_salary'=>3800,'department_id'=>1],

            // HR
            ['id'=>4,'job_title'=>'HR Officer','min_salary'=>1200,'max_salary'=>2500,'department_id'=>2],
            ['id'=>5,'job_title'=>'Recruitment Specialist','min_salary'=>1300,'max_salary'=>2700,'department_id'=>2],

            // Accounting
            ['id'=>6,'job_title'=>'Accountant','min_salary'=>1300,'max_salary'=>3000,'department_id'=>3],
            ['id'=>7,'job_title'=>'Chief Accountant','min_salary'=>2500,'max_salary'=>5000,'department_id'=>3],

            // Sales
            ['id'=>8,'job_title'=>'Sales Executive','min_salary'=>1200,'max_salary'=>3500,'department_id'=>4],
            ['id'=>9,'job_title'=>'Sales Manager','min_salary'=>3000,'max_salary'=>6000,'department_id'=>4],

            // Marketing
            ['id'=>10,'job_title'=>'Marketing Executive','min_salary'=>1300,'max_salary'=>3200,'department_id'=>5],
            ['id'=>11,'job_title'=>'Digital Marketing Specialist','min_salary'=>1500,'max_salary'=>3800,'department_id'=>5],

            // Operations
            ['id'=>12,'job_title'=>'Operations Officer','min_salary'=>1400,'max_salary'=>3000,'department_id'=>6],
        ]);
    }
}
