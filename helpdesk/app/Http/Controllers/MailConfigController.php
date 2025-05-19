<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMailConfigRequest;
use App\Http\Requests\UpdateMailConfigRequest;
use App\Models\MailConfig;

class MailConfigController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMailConfigRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MailConfig $mailConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MailConfig $mailConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMailConfigRequest $request, MailConfig $mailConfig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MailConfig $mailConfig)
    {
        //
    }
}
