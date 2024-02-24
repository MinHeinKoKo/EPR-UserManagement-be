<?php

namespace App\Http\Controllers\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feature\FeatureRequest;
use App\Models\Feature;
use App\Usescases\Features\FeatureAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureController extends Controller
{
    protected $featureAction;
    public function __construct(FeatureAction  $featureAction)
    {
        $this->featureAction = $featureAction;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('show', Auth::user());
        $features = $this->featureAction->fetchAllFeatures();
        return view('pages.features.index',compact(['features']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Auth::user());
        return view('pages.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FeatureRequest $request)
    {
        $this->authorize('create', Auth::user());
        $this->featureAction->store($request->all());
        return redirect()->route("features.index")->with("New Features is created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        $this->authorize('show', Auth::user());
        return view('pages.features.show', $feature);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        $this->authorize('update', Auth::user());
        return view('pages.features.edit', compact(['feature']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $this->authorize('update', Auth::user());
        $this->featureAction->update($request->all() , $feature);
        return redirect()->route("features.index")->with("Features is updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $this->authorize('delete', Auth::user());
        $this->featureAction->delete($feature);
        return redirect()->route("features.index")->with("Features is deleted successfully");
    }
}
