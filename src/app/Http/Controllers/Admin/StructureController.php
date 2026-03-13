<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cafedra;
use App\Models\Department;
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
        $departments = Department::all();
        return view("admin.structure.departments.index", compact("departments"));
    }

    public function createDepartment(Request $request){
        $lang = ($request->lang) ? Lang::where('code', $request->lang)->first() : Lang::where('code', 'en')->first();
        return view("admin.structure.departments.create", compact("lang"));
    }

    public function storeDepartment(Request $request){
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
            $data['icon'] = $request->file('icon')->store('department/icons','public');
        }

        $department = Department::create($data);

        StructureTranslation::create([
            'type' => 'faculty',
            'structure_id' => $department->id,
            'lang_id' => $lang->id,
            'content' => $data['content']
        ]);

        return redirect()->route('admin.structure.departments.index')->with('success','');
    }

    public function indexCafedra(){
        $cafedras = Cafedra::all();
        return view("admin.structure.cafedra.index", compact("cafedras"));
    }

    public function createCafedra(Request $request){
        $lang = ($request->lang) ? Lang::where('code', $request->lang)->first() : Lang::where('code', 'en')->first();
        $faculties = Faculty::all();
        return view("admin.structure.cafedra.create", compact("lang", "faculties"));
    }

    public function storeCafedra(Request $request){
        $data = $request->validate([
            "lang" => 'required',
            "name" => 'string|required',
            'faculty_id' => 'required|exists:faculties,id',
            'content' => 'required',
            'icon' => 'nullable|image|mimes:jpeg,jpg,png,webp,gif',
        ]);

        $lang = Lang::where('code', $data['lang'])->first();

        $data['name'] = json_encode([
            $lang->code => $data['name'],
        ]);

        if (isset($data['icon'])){
            $data['icon'] = $request->file('icon')->store('cafedras/icons','public');
        }

        $cafedra = Cafedra::create([
            'title' => $data['name'],
            'faculty_id' => $data['faculty_id'],
            'icon' => $data['icon'] ?? null,
        ]);

        StructureTranslation::create([
            'type' => 'cafedra',
            'structure_id' => $cafedra->id,
            'lang_id' => $lang->id,
            'content' => $data['content']
        ]);

        return redirect()->route('admin.structure.cafedra.index')->with('success','');
    }
}
