<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable. 
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role_id',
        'image_url',
    ];

    /**
     * Get the role associated with the employee.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
