<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            ['name'=>'Alice Walker','email'=>'alice@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000001','hire_date'=>'2022-01-10','job_id'=>1,'salary'=>'2500','commission_pct'=>'0','manager_id'=>1,'department_id'=>1,'is_role'=>0],
            ['name'=>'Brian Lee','email'=>'brian@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000002','hire_date'=>'2021-09-15','job_id'=>2,'salary'=>'2800','commission_pct'=>'0','manager_id'=>1,'department_id'=>1,'is_role'=>0],
            ['name'=>'Chris Evans','email'=>'chris@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000003','hire_date'=>'2023-02-01','job_id'=>3,'salary'=>'2600','commission_pct'=>'0','manager_id'=>1,'department_id'=>1,'is_role'=>0],

            ['name'=>'Diana Moore','email'=>'diana@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000004','hire_date'=>'2022-05-12','job_id'=>4,'salary'=>'2000','commission_pct'=>'0','manager_id'=>2,'department_id'=>2,'is_role'=>0],
            ['name'=>'Eric Young','email'=>'eric@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000005','hire_date'=>'2021-11-20','job_id'=>5,'salary'=>'2200','commission_pct'=>'0','manager_id'=>2,'department_id'=>2,'is_role'=>0],

            ['name'=>'Frank Hall','email'=>'frank@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000006','hire_date'=>'2020-03-18','job_id'=>6,'salary'=>'2600','commission_pct'=>'0','manager_id'=>3,'department_id'=>3,'is_role'=>0],
            ['name'=>'Grace Kim','email'=>'grace@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000007','hire_date'=>'2019-08-09','job_id'=>7,'salary'=>'4200','commission_pct'=>'0','manager_id'=>3,'department_id'=>3,'is_role'=>0],

            ['name'=>'Henry Adams','email'=>'henry@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000008','hire_date'=>'2021-06-14','job_id'=>8,'salary'=>'2300','commission_pct'=>'5','manager_id'=>4,'department_id'=>4,'is_role'=>0],
            ['name'=>'Isabella Scott','email'=>'isabella@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000009','hire_date'=>'2022-10-01','job_id'=>8,'salary'=>'2400','commission_pct'=>'6','manager_id'=>4,'department_id'=>4,'is_role'=>0],

            ['name'=>'Jack Turner','email'=>'jack@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000010','hire_date'=>'2023-01-20','job_id'=>10,'salary'=>'2600','commission_pct'=>'0','manager_id'=>5,'department_id'=>5,'is_role'=>0],
            ['name'=>'Kelly White','email'=>'kelly@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000011','hire_date'=>'2022-07-07','job_id'=>11,'salary'=>'3000','commission_pct'=>'0','manager_id'=>5,'department_id'=>5,'is_role'=>0],

            ['name'=>'Leo Martin','email'=>'leo@company.com','email_verified_at'=>now(),'password'=>Hash::make('123456'),'phone_number'=>'0902000012','hire_date'=>'2021-04-25','job_id'=>12,'salary'=>'2200','commission_pct'=>'0','manager_id'=>6,'department_id'=>6,'is_role'=>0],
        ]);
    }
}
