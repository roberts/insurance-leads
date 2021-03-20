<?php

namespace Roberts\Leads\Http\Livewire\OnboardingForm;

use Roberts\Leads\Enums\OnboardingFormStep;
use Roberts\Leads\Http\Livewire\OnboardingForm\OnboardingFormStepComponent;

class CompInsuranceCheck extends OnboardingFormStepComponent
{
    protected $rules = [
        'attributes.should_add_insurance_details' => 'required|boolean',
    ];

    protected $validationAttributes = [];

    public function render()
    {
        return view('livewire.onboarding-form.comp-insurance-check');
    }

    public function processLead(array $data)
    {
        return $this->lead;
    }

    public function getNextStep()
    {
        if (! $this->attributes['should_add_insurance_details']) {
            return OnboardingFormStep::COMPLETED;
        }

        return OnboardingFormStep::COMP_INSURANCE;
    }
}