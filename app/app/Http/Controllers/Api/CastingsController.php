<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;

class CastingsController extends Controller
{

    public function index()
    {
        $castingsService = new \App\Services\CastingsService();
        return ['data' => $castingsService->getCastings()];
    }

    public function store()
    {
        return '{"w": 1}';
    }

    public function show()
    {
        return '{"w": 2}';
    }

    public function update()
    {
        return '{"w": 3}';
    }

    public function destroy()
    {
        return '{"w": 4}';
    }

    public function ranking()
    {
        return '{"num_of": 123}';
    }
}
