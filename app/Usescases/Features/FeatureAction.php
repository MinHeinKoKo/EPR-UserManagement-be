<?php


namespace App\Usescases\Features;


use App\Interfaces\Feature\FeatureInterface;
use App\Models\Feature;

class FeatureAction
{
    private $featureRepository;

    public function __construct(FeatureInterface $featureRepository)
    {
        $this->featureRepository = $featureRepository;
    }

    public function fetchAllFeatures()
    {
        return $this->featureRepository->fetchAllFeatures();
    }

    public function fetchSingleFeature(int $id)
    {
        return $this->featureRepository->fetchSingleFeature($id);
    }

    public function store(array $data)
    {
        return $this->featureRepository->store($data);
    }

    public function update(array $data , Feature $feature)
    {
        return $this->featureRepository->update($data , $feature);
    }

    public function delete(Feature $feature)
    {
        return $this->featureRepository->delete($feature);
    }
}
