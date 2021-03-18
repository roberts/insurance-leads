<?php

namespace Roberts\Leads\Database\Factories;

use Roberts\Leads\Models\WcBusiness;
use Illuminate\Database\Eloquent\Factories\Factory;

class WcBusinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WcBusiness::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
        ];
    }

    public function withNullableFields()
    {
        return $this->state(function () {
            return [
                'nature' => $this->faker->word,
                'fein' => $this->faker->uuid,
                'year_of_establishment' => $this->faker->numberBetween(1900, 2010),
                'legal_entity_type' => $this->faker->word,
            ];
        });
    }
}
