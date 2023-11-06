<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(title="L5 Swagger", version="1.0.0")
 *
 * @OA\Get(
 *     path="/",
 *     description="Controller",
 *     @OA\Response(response="default", description="Controller")
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
