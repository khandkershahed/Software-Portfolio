<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function planModule()
    {
        return $this->belongsTo(PlanModule::class, 'plan_module_id');
    }
    public function pricingPlan()
    {
        return $this->belongsTo(PricingPlan::class, 'pricing_plan_id');
    }


}
