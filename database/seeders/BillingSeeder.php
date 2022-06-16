<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Billing;

class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Billing::create([
            'plan' => 'Diamond Subscription Plan',
            'duration' => 'Annualy',
            'Price' => '150000'

        ]);
        
        Billing::create([
            'plan' => 'Gold Subscription Plan',
            'duration' => 'Quarterly',
            'Price' => '80000'
            
        ]);
        
        Billing::create([
            'plan' => 'Platinum Subscription Plan',
            'duration' => 'Monthly',
            'Price' => '50000'
            
        ]);
        
        Billing::create([
            'plan' => 'Flexible Subscription Plan',
            'duration' => 'Daily',
            'Price' => '5000'
            
        ]);
    }
}
