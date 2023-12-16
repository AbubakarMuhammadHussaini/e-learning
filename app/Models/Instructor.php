<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'staff_number','department_id'];

    public function allocations()
    {
        return $this->hasMany(Allocation::class);
    }

    public function learningMaterials()
    {
        return $this->hasMany(LearningMaterial::class);
    }

    /**
     * Get the user for the instructor.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
