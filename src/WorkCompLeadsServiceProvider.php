<?php

declare(strict_types=1);

namespace Roberts\WorkCompLeads;

use Livewire\Livewire;
use Roberts\WorkCompLeads\Livewire\OnboardingForm;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class WorkCompLeadsServiceProvider extends TipoffServiceProvider
{
    public function boot()
    {
        parent::boot();

        Livewire::component('onboarding-form', OnboardingForm::class);

        $this->publishes([
            __DIR__.'/../dist' => public_path('vendor/work-comp-leads'),
        ], 'public');
    }

    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('work-comp-leads')
            ->hasConfigFile();
    }
}
