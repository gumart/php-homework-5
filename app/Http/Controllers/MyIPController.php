<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MyIPService;

class MyIPController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    private $myIPSerivce;
    
    public function __construct(MyIPService $myIPService)
    {
        $this->myIPService = $myIPService;
    }

    public function getMyIP(Request $request)
    {
        $result = $this->myIPService->getMyIP();

        return response($result, 200);
    }
}
