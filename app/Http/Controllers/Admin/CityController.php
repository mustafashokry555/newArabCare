<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('country')->withTrashed()->get();
        return view('admin.city.index', compact('cities'));
    }

    public function create()
    {
        $countries = Country::all(); // To populate the dropdown for selecting a country
        return view('admin.city.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        City::create($request->all());

        return redirect()->route('cities.index')->with('flash', ['type', 'success', 'message' => 'City created successfully.']);
    }

    public function show(City $city)
    {
        // return view('admin.city.show', compact('city'));
    }

    public function edit(City $city)
    {
        $countries = Country::all(); // To allow editing the associated country
        return view('admin.city.edit', compact('city', 'countries'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'country_id' => 'required|exists:countries,id',
        ]);

        $city->update($request->all());

        return redirect()->route('cities.index')->with('flash', ['type', 'success', 'message' => 'City updated successfully.']);
    }

    public function destroy(City $city)
    {
        $city->delete();

        return redirect()->route('cities.index')->with('flash', ['type', 'success', 'message' => 'City deleted successfully.']);
    }

    public function restore($id)
    {
        City::onlyTrashed()->find($id)->restore();

        return redirect()->route('cities.index')->with('flash', ['type', 'success', 'message' => 'City restored successfully.']);
    }

    public function forceDelete($id)
    {
        City::onlyTrashed()->find($id)->forceDelete();

        return redirect()->route('cities.index')->with('flash', ['type', 'success', 'message' => 'City permanently deleted.']);
    }

    public function get_cities(Request $request) {
        $cities = City::query();
        if ($request->country_id) {
            $cities = $cities->where('country_id', $request->country_id);
        }
        $cities = $cities->get();

        return response()->json($cities);
    }
}
