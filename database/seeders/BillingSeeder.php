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
            'price' => '150000'

        ]);
        
        Billing::create([
            'plan' => 'Gold Subscription Plan',
            'duration' => 'Quarterly',
            'price' => '80000'
            
        ]);
        
        Billing::create([
            'plan' => 'Platinum Subscription Plan',
            'duration' => 'Monthly',
            'price' => '50000'
            
        ]);
        
        Billing::create([
            'plan' => 'Flexible Subscription Plan',
            'duration' => 'Daily',
            'price' => '5000'
            
        ]);
    }
}
