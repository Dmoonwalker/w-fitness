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
            'Duration' => 'Annualy',
            'Price' => '150000'

        ]);
        
        Billing::create([
            'plan' => 'Gold Subscription Plan',
            'Duration' => 'Quarterly',
            'Price' => '80000'
            
        ]);
        
        Billing::create([
            'plan' => 'Platinum Subscription Plan',
            'Duration' => 'Monthly',
            'Price' => '50000'
            
        ]);
        
        Billing::create([
            'plan' => 'Flexible Subscription Plan',
            'Duration' => 'Daily',
            'Price' => '5000'
            
        ]);
    }
}
