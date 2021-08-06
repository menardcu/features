<?php
namespace App\Repositories;

use App\Models\Features;

class FeaturesRepository {

    protected $model;

    public function __construct(Features $model){
        $this->model = $model;
    }

    public function createUpdate($data)
    {
        $data = $this->model::updateOrCreate([
            'email' => $data['email'],
            'feature_name' => $data['feature_name']
        ], $data);

        return $data;
    }

    public function findAccessByFeatureEmail($feature, $email)
    {
        return $this->model::where('feature_name', $feature)
            ->where('email', $email)
            ->first();
    }

}
