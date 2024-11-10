<?php

namespace App\Http\Controllers;

use App\Http\Requests\Safety\SafetyRequest;
use App\Interfaces\SafetyCheckList\SafetyCheckListRepositoryInterface;
use App\Models\SafetyCheckList;
use Illuminate\Http\Request;

class SafetyCheckListController extends Controller
{
    private $safetyCheckList;

    public function __construct(SafetyCheckListRepositoryInterface $safetyCheckList)
    {
        $this->safetyCheckList = $safetyCheckList;
    }

    public function index()
    {
        return $this->safetyCheckList->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->safetyCheckList->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SafetyRequest $request)
    {
        return $this->safetyCheckList->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->safetyCheckList->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->safetyCheckList->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->safetyCheckList->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->safetyCheckList->destroy($id);
    }
}
