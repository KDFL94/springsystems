<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employee_first_name',
        'employee_last_name',
        'employee_company',
    ];

    /**
     * Get the company that this employee belongs too.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
