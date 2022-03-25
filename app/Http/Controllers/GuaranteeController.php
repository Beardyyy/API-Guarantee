<?php

namespace App\Http\Controllers;

use App\Http\Resources\GuaranteeResource;
use App\Models\Guarantee;
use App\Http\Requests\StoreGuaranteeRequest;
use App\Http\Requests\UpdateGuaranteeRequest;

class GuaranteeController extends Controller
{

    public function index()
    {
        return  GuaranteeResource::collection(Guarantee::all());

    }

    public function store(StoreGuaranteeRequest $request)
    {
        $guarantee = Guarantee::create([

            'category_id' => $request->input('category_id'),
            'company_id' => $request->input('company_id'),
            'user_id' => $request->getUser(),
            'starts' => $request->input('starts'),
            'ends' => $request->input('ends'),
            'thumbnail' => $request->input('thumbnail'),
            'description' => $request->input('description'),
            'created_at' => $request->input('created_at'),
            'updated_at' => $request->input('updated_at')

        ]);

        return new GuaranteeResource($guarantee);
    }

    public function show(Guarantee $guarantee)
    {
        return new GuaranteeResource($guarantee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guarantee  $guarantee
     * @return \Illuminate\Http\Response
     */
    public function edit(Guarantee $guarantee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuaranteeRequest  $request
     * @param  \App\Models\Guarantee  $guarantee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuaranteeRequest $request, Guarantee $guarantee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guarantee  $guarantee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guarantee $guarantee)
    {
        //
    }
}
