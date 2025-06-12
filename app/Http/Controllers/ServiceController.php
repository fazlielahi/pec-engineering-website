<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function serviceDetails()
    {
        return view('services.service-details');
    }

    public function greenEngineering()
    {
        return view('services.green-engineering');
    }

    public function bms()
    {
        return view('services.bms');
    }

    public function riskManagement()
    {
        return view('services.risk-management');
    }

    public function aor()
    {
        return view('services.aor');
    }

    public function pmo()
    {
        return view('services.pmo');
    }

    public function mechnicalDesign()
    {
        return view('services.mechnical-design');
    }

    public function structualDesign()
    {
        return view('services.structual-design');
    }

    public function electricalDesign()
    {
        return view('services.electerical-design');
    }

    public function engineeringManagement()
    {
        return view('services.engineering-management');
    }

    public function engineeringSupervision()
    {
        return view('services.enginerring-supervision');
    }

    public function archDesign()
    {
        return view('services.arch-design');
    }
    
    public function interiorDesign()
    {
        return view('services.interior-design');
    }
}
