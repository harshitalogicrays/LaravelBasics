<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $customers=new Customer; 
        // $customers->name='Shyam';
        // $customers->email='shyam@gmail.com';
        // $customers->mobile=999999999;
        // $customers->password=123456;
        // $customers->gender='M';
        // $customers->dob='2023-01-10';
        // $customers->address='pune';  
        // $customers->isActive=true; 
        // $customers->save();
        for($i=1;$i<=50;$i++){
        $faker1=Faker::create();
        $customers=new Customer; 
        $customers->name=$faker1->name;
        $customers->email=$faker1->email;
        $customers->mobile=999999999;
        $customers->password=$faker1->password;
        $customers->gender='M';
        $customers->dob=$faker1->date();
        $customers->address=$faker1->address;  
        $customers->isActive=true; 
        $customers->save();
        }
    }
}
