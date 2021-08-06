<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FeaturesService;

class FeatureController extends Controller
{
    private $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FeaturesService $service)
    {
        $this->service = $service;
    }

    public function getAccess(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'featureName' => 'required',
        ]);

        $email = $request->get('email');
        $feature = $request->get('featureName');
        $code = 200;

        try {
            $ret = $this->service->fetchAccess($feature, $email);
            if($ret->enable)
                $status = true;
            else
                $status = false;

            $response = ['canAccess' => $status];
        } catch(\Throwable $e) {
            $response = ["canAccess" => false];
        }

        return response()->json($response, $code);
    }

    public function createUpdateFeature(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'featureName' => 'required',
            'enable' => 'required|boolean',
        ]);

        try {
            $code = 200;
            $ret = $this->service->createUpdateFeature($request->all());
        } catch(\Throwable $e) {
            $code = 304;
        }

        return response()->json(null, $code);
    }

}
