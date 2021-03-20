<?php

namespace Roberts\Leads\Http\Livewire\OnboardingForm;

use Roberts\Leads\Enums\OnboardingFormStep;
use Roberts\Leads\Http\Livewire\OnboardingForm\OnboardingFormStepComponent;

class MailingAddress extends OnboardingFormStepComponent
{
    protected $rules = [
        'attributes.zip_code' => 'required',
        'attributes.mailing_address' => 'required',
        'attributes.city' => 'required',
        'attributes.state' => 'required',
    ];

    protected $validationAttributes = [];

    public function render()
    {
        return view('livewire.onboarding-form.mailing-address');
    }

    public function processLead(array $data)
    {
        return $this->lead;
    }

    public function getNextStep()
    {
        return OnboardingFormStep::BUSINESS_DETAILS;
    }
}