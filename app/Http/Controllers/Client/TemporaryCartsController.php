<?php

namespace App\Http\Controllers\Client;

use App\Facades\TemporaryCart;
use App\House;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TemporaryCartsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(Request $request): JsonResponse
    {
        //TemporaryCart::clear();
        $temporaryCart = TemporaryCart::store($request);

        return response()->json([
            'items' => $temporaryCart->get(),
            'contents' => $temporaryCart->getDropdownTable(TemporaryCart::items())
        ]);
    }
}
