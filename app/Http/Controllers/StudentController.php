<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Students;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('students.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Group $group)
    {
        $validatedData = $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255'
        ]);

        $student = new Students;
        $student->fill($validatedData);
        $student->group_id = $group->id;
        $student->save();

        return redirect()->route('groups.show', ['group' => $group]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Students $student)
    {
        return view('students.show', compact('group', 'student'));
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
