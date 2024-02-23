<?php


namespace App\Repositories\Feature;


use App\Interfaces\Feature\FeatureInterface;
use App\Models\Feature;

class FeaturesRepository implements FeatureInterface
{

    public function fetchAllFeatures()
    {
        return Feature::paginate(10)->withQueryString();
    }

    public function fetchSingleFeature(int $id)
    {
        return Feature::findOrFail($id);
    }

    public function store(array $data)
    {
        return Feature::create($data);
    }

    public function update(array $data, Feature $feature)
    {
        return $feature->update($data);
    }

    public function delete(Feature $feature)
    {
        return $feature->delete();
    }
}
