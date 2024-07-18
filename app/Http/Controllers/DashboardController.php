<?php

namespace App\Http\Controllers;

use App\Models\Fires;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        ini_set('max_execution_time', 300);
        $uniqueAreas = Fires::selectRaw('NWCG_REPORTING_UNIT_NAME, COUNT(*) as count')
            ->groupBy('NWCG_REPORTING_UNIT_NAME')
            ->get();

        return view('welcome', ['Forests' => $uniqueAreas]);
    }
}
