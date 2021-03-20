<?php

namespace Roberts\Leads\Tests\Unit\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use Roberts\Leads\Models\Lead;
use Roberts\Leads\Models\LeadBusiness;
use Roberts\Leads\Tests\TestCase;

class LeadTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function it_has_an_email()
    {
        $email = $this->faker->email;
        $lead = Lead::factory()->create(['email' => $email]);

        $this->assertEquals($email, $lead->email);
    }

    /** @test */
    public function it_has_the_first_name_of_the_lead_creator()
    {
        $firstName = $this->faker->firstName;
        $lead = Lead::factory()->create(['first_name' => $firstName]);

        $this->assertEquals($firstName, $lead->first_name);
    }

    /** @test */
    public function it_has_the_last_name_of_the_lead_creator()
    {
        $lastName = $this->faker->lastName;
        $lead = Lead::factory()->create(['last_name' => $lastName]);

        $this->assertEquals($lastName, $lead->last_name);
    }

    /** @test */
    public function it_has_the_position_of_the_lead_creator()
    {
        $position = $this->faker->word;
        $lead = Lead::factory()->create(['position' => $position]);

        $this->assertEquals($position, $lead->position);
    }

    /** @test */
    public function it_has_the_phone_number_of_the_lead_creator()
    {
        $phoneNumber = $this->faker->phoneNumber;
        $lead = Lead::factory()->create(['phone_number' => $phoneNumber]);

        $this->assertEquals($phoneNumber, $lead->phone_number);
    }

    /** @test */
    public function it_has_the_date_the_lead_was_verified_at()
    {
        $lead = Lead::factory()->create(['verified_at' => $this->faker->date]);

        $this->assertInstanceOf(Carbon::class, $lead->verified_at);
    }

    /** @test */
    public function it_has_the_date_the_form_was_completed_at()
    {
        $lead = Lead::factory()->create(['form_completed_at' => $this->faker->date]);

        $this->assertInstanceOf(Carbon::class, $lead->form_completed_at);
    }

    /** @test */
    public function it_is_associated_with_a_business()
    {
        $lead = Lead::factory()->create();
        LeadBusiness::factory()->create(['lead_id' => $lead->id]);

        $this->assertInstanceOf(LeadBusiness::class, $lead->business);
    }
}
