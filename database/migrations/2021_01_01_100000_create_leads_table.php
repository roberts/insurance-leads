<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Roberts\Leads\Models\LeadBusiness;
use Roberts\Leads\Models\LeadType;

class CreateLeadsTable extends Migration
{
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('lead_number')->index()->unique(); // Generated by system. This is identifier used to communicate about the quote request & for additional form pages.
            $table->string('email');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->json('custom_attributes');

            // Timestamps of when various processes completed. Will also have statuses added
            $table->dateTime('form_completed_at')->nullable();
            $table->dateTime('verified_at')->nullable();

            $table->foreignIdFor(LeadType::class);
            $table->foreignIdFor(app('phone'))->nullable();
            $table->foreignIdFor(app('user'))->nullable(); // Can be added later if the email from the lead matches a user in the system
            $table->foreignIdFor(app('user'), 'creator_id')->nullable(); // Will seldom be used, but is needed in case a lead is added by a staff member on behalf of a lead that called in.
            $table->foreignIdFor(app('user'), 'updater_id')->nullable(); // Most fields will be locked for updates in Nova, but we may allow some to be updated by staff.
            $table->timestamps();
        });
    }
}
