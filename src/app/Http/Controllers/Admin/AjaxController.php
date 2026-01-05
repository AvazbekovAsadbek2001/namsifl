<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getCafedrasByFaculty($faculty_id)
    {
        $cafedras = \App\Models\Cafedra::where('faculty_id', $faculty_id)->get();
        return response()->json($cafedras);
    }
}
