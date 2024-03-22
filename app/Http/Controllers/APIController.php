<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;
class APIController extends Controller
{
    public function GetDataFromApi()
    {
        $response = Http::get('https://m2.unlimgroup.ru/api/v1/tasks-view');
        if($response->successful())
        {
            return response()->json($response->json('200'));
        }
        else
        {
            return response()->json(['error' => 'Failed to retrieve data from the API'], 500);
        }
    }
}
