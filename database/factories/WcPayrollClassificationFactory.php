<?php

namespace Roberts\Leads\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Roberts\Leads\Models\WcLead;
use Roberts\Leads\Models\WcPayrollClassification;

class WcPayrollClassificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WcPayrollClassification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class_code' => $this->faker->uuid,
            'number_of_employees' => $this->faker->randomNumber,
            'annual_payroll' => $this->faker->randomNumber,
            'wc_lead_id' => WcLead::factory(),
        ];
    }
}
