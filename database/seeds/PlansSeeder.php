<?php

use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->delete();
        DB::table('plans')->insert([
            0 =>
                [
                    'name'        => 'Basic',
                    'slug'        => 'basic',
                    'stripe_plan' => 'basic',
                    'cost'        => 10,
                    'description' => null,
                ],
            1 =>
                [
                    'name'        => 'Professional',
                    'slug'        => 'professional',
                    'stripe_plan' => 'professional',
                    'cost'        => 50,
                    'description' => null,
                ]]);
    }
}
