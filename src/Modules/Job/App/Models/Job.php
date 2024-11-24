<?php

namespace Modules\Job\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Job\Database\factories\JobFactory;
use Modules\Company\App\Models\Company;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'company_id',
        'job_title',
        'job_location',
        'job_type',
        'employment_type',
        'open_date',
        'description',
        'requirements',
        'responsibilities',
    ];
    
    protected static function newFactory(): JobFactory
    {
        //return JobFactory::new();
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
