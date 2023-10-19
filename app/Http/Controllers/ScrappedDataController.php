<?php

namespace App\Http\Controllers;
use App\Models\ScrappedData;
use Illuminate\Http\Request;

class ScrappedDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scrapped = ScrappedData::all();
        foreach ($scrapped as $data) {
            $encodeName = urlencode($data['Name']);
            $data->image_link = 'https://render.albiononline.com/v1/item/' . $encodeName . '.png';
        }

        return response()->json([
            'success' => true,
            'message' => 'skill data fetched',
            'data' => $scrapped
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
