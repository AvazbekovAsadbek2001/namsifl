<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\FacultyTranslation;
use App\Models\Lang;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function indexFaculties(){
        return view("admin.structure.faculties.index");
    }

    public function storeFaculty(Request $request){
        $data = $request->validate([
            "lang" => 'required',
            "name" => 'string|required',
            'icon' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif',
            'content' => 'required' 
        ]);

        $data['name'] = json_encode([
            'name' => $data['name'],
        ]);
        $faculty = Faculty::create($data);

        $lang = Lang::where('code', $data['lang'])->first();

        FacultyTranslation::create([
            'content' => $data['content'],
            'lang_id' => $lang->id,
            'faculty_id' => $faculty->id
        ]);

        return redirect()->route('admin.structure.faculties.index')->with('success','');
    }

    public function createFaculty(Request $request){
        $lang = ($request->lang) ? Lang::where('code', $request->lang)->first() : Lang::where('code', 'en')->first();
        return view("admin.structure.faculties.create", compact("lang"));
    }
}
