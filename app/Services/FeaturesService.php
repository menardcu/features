<?php
namespace App\Services;

use App\Repositories\FeaturesRepository;

class FeaturesService {

    private $repository;

    public function __construct(FeaturesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function fetchAccess($feature, $email)
    {
        return $this->repository->findAccessByFeatureEmail($feature, $email);
    }

    public function createUpdateFeature($data)
    {
        if(array_key_exists('featureName', $data)) {
            $data['feature_name'] = $data['featureName'];
            unset($data['featureName']);
        }
        return $this->repository->createUpdate($data);
    }

}
