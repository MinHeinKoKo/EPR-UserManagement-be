<?php

namespace App\Interfaces\Feature;

use App\Models\Feature;

interface FeatureInterface {
    public function fetchAllFeatures();

    public function fetchSingleFeature(int $id);

    public function store(array $data);

    public function update(array $data , Feature $feature);

    public function delete(Feature $feature);
}
