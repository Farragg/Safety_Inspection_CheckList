<?php

namespace App\Repository\SafetyCheckList;

use App\Interfaces\SafetyCheckList\SafetyCheckListRepositoryInterface;
use App\Models\SafetyCheckList;
use Illuminate\Support\Facades\DB;

class SafetyCheckListRepository implements SafetyCheckListRepositoryInterface
{

    public function index()
    {
        $checklist = SafetyCheckList::all();

        return view('safetychecklist.index', compact('checklist'));
    }

    public function show($id)
    {
        $safetyCheckList = SafetyCheckList::findOrFail($id);
        return view('safetychecklist.show', compact('safetyCheckList'));
    }

    public function create()
    {
        return view('safetychecklist.create');
    }

    public function store($request)
    {
        SafetyCheckList::create($request->all());

        return redirect()->route('safety.index')->with('success', __('site.added'));
    }

    public function edit($id)
    {
        $safety = SafetyCheckList::findOrFail($id);
        return view('safetychecklist.edit', compact('safety'));
    }

    public function update($request, $id)
    {
        $safetyCheckList = SafetyCheckList::findOrFail($id);
        // fill the fields with the new changes
        $safetyCheckList->fill($request->all());

        // check for changes and update only if there are changes
        if ($safetyCheckList->isDirty()) {
            $safetyCheckList->save();
        }

        return redirect()->back()->with('success', __('site.updated'));
    }

    public function destroy($id)
    {
        SafetyCheckList::findOrFail($id)->delete();

        return redirect('/safety')->with('danger', __('site.deleted'));
    }
}
