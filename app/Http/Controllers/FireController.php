<?php

namespace App\Http\Controllers;

use App\Models\Fires;
use Illuminate\Http\Request;

class FireController extends Controller
{
    public function index()
    {
        ini_set('max_execution_time', 300);
        $uniqueAreas = Fires::selectRaw('NWCG_REPORTING_UNIT_NAME, COUNT(*) as count')
            ->groupBy('NWCG_REPORTING_UNIT_NAME')
            ->paginate(30);

        return view('welcome', ['Forests' => $uniqueAreas]);
    }

    public function forestDetails($forestName)
    {
        $fires = Fires::where('NWCG_REPORTING_UNIT_NAME', $forestName)->orderBy('DISCOVERY_DATE', 'desc')->paginate(15);

        return view('forest_detail', ['fires' => $fires, 'forestName' => $forestName]);
    }
}