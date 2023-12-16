<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Allocation;
use App\Models\Course;
use App\Models\Instructor;

class InstructorAllocationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function allocatedCourses(Request $request)
    {
        $user = \Auth::user();

        $instructor = $user->instructor;

        // dd($instructor, $instructor->allocations);

        return view('instructors.instructor-allocations', compact('instructor'));
    }

    public function allocatedDetails(Allocation $allocation)
    {
        // dd($allocation->course->enrollments);

        return view('instructors.allocation-details', compact('allocation'));
    }
}
