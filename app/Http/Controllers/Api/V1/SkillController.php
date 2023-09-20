<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() 
    {
        return response()->json('Skill Index');
    }

   public function store(StoreSkillRequest $request) 
   {
        Skill::create($request->validated());
        return response()->json('Skill Created');
   } 

   public function destroy($id)
   {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return response()->json('Skill Deleted');
   }

   public function update(StoreSkillRequest $request, $id)
   {
    $validatedRequest = $request->validated();

    $skill = Skill::findOrFail($id);
    $skill->update($validatedRequest);

    return response()->json('Skill Updated');
   }
}
