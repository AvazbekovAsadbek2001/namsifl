<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\FacultyTranslation;
use App\Models\Lang;
use App\Models\StructureTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StructureController extends Controller
{
    public function indexFaculties(){
        $faculties = Faculty::all();
        return view("admin.structure.faculties.index", compact("faculties"));
    }

    public function storeFaculty(Request $request){
        $data = $request->validate([
            "lang" => 'required',
            "name" => 'string|required',
            'icon' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif',
            'content' => 'required' 
        ]);

        $lang = Lang::where('code', $data['lang'])->first();

        $data['name'] = json_encode([
            $lang->code => $data['name'],
        ]);

        if (isset($data['icon'])){
            $data['icon'] = $request->file('icon')->store('faculties/icons','public');
        }

        $faculty = Faculty::create($data);

        StructureTranslation::create([
            'type' => 'faculty',
            'structure_id' => $faculty->id,
            'lang_id' => $lang->id,
            'content' => $data['content']
        ]);

        return redirect()->route('admin.structure.faculties.index')->with('success','');
    }

    public function createFaculty(Request $request){
        $lang = ($request->lang) ? Lang::where('code', $request->lang)->first() : Lang::where('code', 'en')->first();
        return view("admin.structure.faculties.create", compact("lang"));
    }

    public function indexDepartments(){
        //
    }

    public function storeDepartment(Request $request){
        //
    }

    public function indexCafedra(){
        //
    }

    public function storeCafedra(Request $request){
        //
    }
}
