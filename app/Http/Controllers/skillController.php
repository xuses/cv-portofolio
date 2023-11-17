<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;

class skillController extends Controller
{
    //
    public function index()
    {
        $skill_url = public_path('admin/devicon.json');
        $skill_data = file_get_contents($skill_url);
        $skill_data = json_decode($skill_data, true);
        $skill = array_column($skill_data, 'name');
        $skill = "'" . implode("','", $skill) . "'";
        ##dd($skill);
        ##echo $skill_data;
        ##exit();
        return view('dashboard.skill.index')->with(['skill' => $skill]);

    }
    public function update(Request $request)
    {
        if ($request->method() =='POST'){
            $request->validate([
                '_language'=> 'required',
                '_workflow'=> 'required'         
            ], [
                '_language.required' => 'Silahkan masukan bahasa pemprograman yang anda kuasai',
                '_workflow.required' => 'Silahkan masukan Workflow yang anda kuasai',
            ]);

            metadata::updateOrCreate(['meta_key' => '_language'], ['meta_value' => $request->_language]);
            metadata::updateOrCreate(['meta_key' => '_workflow'], ['meta_value' => $request->_workflow]);
            return redirect()->route('skill.index')->with('success', 'Behasil melakukan update data skill');
        }

    }
}
