<?php
/**
 * Created by PhpStorm.
 * User: andresabello
 * Date: 2019-02-15
 * Time: 00:20
 */

namespace App\Http\Controllers;


use App\TypingTest;
use Illuminate\Http\Request;

class TypingTestController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        try {
            TypingTest::create($request->all());
        } catch (\Exception $exception) {
            report($exception);
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }

        return response()->json([
            'message' => 'added'
        ]);
    }

}