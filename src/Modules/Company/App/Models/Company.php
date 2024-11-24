<?php

namespace Modules\Company\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Company\Database\factories\CompanyFactory;
use Modules\Job\App\Models\Job;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'industry',
        'number_of_followers',
        'location',
        'description',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}