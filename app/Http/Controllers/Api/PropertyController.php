<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    /**
     * Return list of all properties.
     * @return Property[]|Collection
     */
    public function index()
    {
        return Property::all();

    }

    /**
     * Return list of all properties by search result.
     *  @param Request $request
     * @return Property[]|Collection
     */
    public function search(Request $request)
    {
        $params = $request->all();
        if (count($params) > 0) {
            return Property::search($params)->get();
        } else {
            return Property::all();
        }

    }
}
