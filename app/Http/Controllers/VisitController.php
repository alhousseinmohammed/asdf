<?php

// app/Http/Controllers/VisitController.php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Cohort;

class VisitController extends Controller
{
    // Method to show the list of academies
    public function index()
    {
        $academies = Academy::all(); // Fetch all academies
        return view('academy')->with('academies', $academies);

    }

    // Method to show the cohorts of a specific academy
    public function showCohorts($academyId)
    {
        $academy = Academy::findOrFail($academyId); // Find the academy by ID
        $cohorts = $academy->cohorts; // Fetch the cohorts related to the academy

        return view('academies.showCohorts', compact('academy', 'cohorts'));
    }

        // Method to show a specific cohort with its students
    public function showCohortWithStudents($cohortId)
    {
        $cohort = Cohort::with('students')->findOrFail($cohortId); // Fetch the cohort with its students

        return view('students', compact('cohort'));
    }
}
