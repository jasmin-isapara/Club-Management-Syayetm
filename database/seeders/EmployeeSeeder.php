<?php

namespace Database\Seeders;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'employee_id' => 1237,
            'first_name' => 'henil',
            'last_name' => 'gohil',
            'gender' => 'male',
            'email' => 'henil.gohil@arsenaltech.com',
            'mobile' => '8238603328',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('employees')->insert([
            'employee_id' => 1238,
            'first_name' => 'jasmin',
            'last_name' => 'isapara',
            'gender' => 'male',
            'email' => 'jasmin.isapara@arsenaltech.com',
            'mobile' => '9067043443',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
