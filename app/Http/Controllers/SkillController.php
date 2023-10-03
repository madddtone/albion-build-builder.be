<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();

        return response()->json([
            'success' => true,
            'message' => 'skill data fetched',
            'data' => $skills
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
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string'
        ]);

        $validateSkill = Skill::where('name', $request->name)->first();

        if (!$validateSkill){
            $skill = Skill::create([
                'name' => $request->name,
                'description' => $request->description,
                'type' => $request->type
            ]);

            return response()->json([
                'success' => true,
                'message' => 'stored successfull',
                'data' => $skill
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'store data failed'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skill = Skill::where('id', $id)->first();

        if (!$skill) {
            return response()->json([
                'success' => false,
                'message' => 'data not found'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'data found',
            'data' => $skill
        ]);
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
        $skill = Skill::where('id', $id)->first();

        if (!$skill) {
            return response()->json([
                'success' => false,
                'message' => 'data not found'
            ]);
        }; 

        $skill->update([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type
        ]);

        return response()->json([
            'success' => true,
            'message' => 'update successfull',
            'data' => $skill
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::where('id', $id)->delete();

        return response()->json([
            'success' => true,
            'message' => "data succesfully deleted"
        ]);
    }
}