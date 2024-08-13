<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/user/detail",
     *     summary="Get user detail",
     *     operationId="GetUserDetail",
     *     tags={"Users"},
     *     security={{"passport": {}}},
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function detail(Request $request): JsonResponse
    {
        return response()->json(
            $request->user()->only([
                'id',
                'name',
                'email'
            ])
        );
    }
}
