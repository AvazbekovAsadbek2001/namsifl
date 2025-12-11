<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeContent;
use App\Models\Faculty;
use App\Models\Lang;
use App\Models\Nation;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('admin.employees.index', compact('employees'));
    }

    public function create(Request $request)
    {
        $lang = Lang::where('code', $request->lang)->first() ? : Lang::where('code', 'uz')->first();

        $nations = Nation::all();
        $positions = Position::all();

        $faculties = Faculty::all();
        $departments = Department::all();
        $cafedras = Department::all();
        return view('admin.employees.create', compact('lang', 'nations', 'positions', 'faculties', 'departments', 'cafedras'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'lang' => 'required|string|exists:langs,code',
            'name' => 'required|string|max:2048',
            'birth_date' => 'required|date',
            'photo' => 'required',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            
            'schedule_days' => 'nullable',
            'schedule_time' => 'nullable',

            'nation_id' => 'required|exists:nations,id',
            'position_id' => 'required|exists:positions,id',
            'position_description' => 'nullable|string|max:4096',

            'faculty_id' => 'nullable|exists:faculties,id',
            'department_id' => 'nullable|exists:departments,id',
            'cafedra_id' => 'nullable|exists:departments,id',

            'biography' => 'nullable',
            'work_experience' => 'nullable',
            'functional_duties' => 'nullable',        
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('employees', 'public');
        }

        $data['social_medias'] = json_encode([
            'phone' => $data['phone'],
            'email' => $data['email'],
        ]);
        
        $data['employee_contents'] = json_encode([
            'biography' => $data['biography'],
            'work_experience' => $data['work_experience'],
            'functional_duties' => $data['functional_duties'],
        ]);

        $contents = collect([
            EmployeeContent::create([
                'type' => 'biography',
                'lang_code' => App::getLocale(),
                'content' => $data['biography'] ?? null,
            ]),
            EmployeeContent::create([
                'type' => 'work_experience',
                'lang_code' => App::getLocale(),
                'content' => $data['work_experience'] ?? null,
            ]),
            EmployeeContent::create([
                'type' => 'functional_duties',
                'lang_code' => App::getLocale(),
                'content' => $data['functional_duties'] ?? null,
            ]),
        ]);

        $data['position_description'] = json_encode([
            App::getLocale() => $data['position_description']
        ]);

        $data['employee_contents'] = json_encode($contents->pluck('id')->toArray());

        Employee::create($data);

        return redirect()->route('admin.employee.index')->with('success', 'Employee created successfully.');
    }
}
