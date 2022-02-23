<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;


class CompanyController extends Controller
{



    public function index()
    {
        return CompanyResource::collection(Company::all());
    }



    public function create()
    {
        //
    }




    public function store(StoreCompanyRequest $request)
    {
        $company = Company::create([
            'name' => $request->input('name'),
            'location' => $request->input('location')
        ]);

        return new CompanyResource($company);
    }



    public function show(Company $company)
    {
        return new CompanyResource($company);
    }




    public function edit(Company $company)
    {
        //
    }




    public function update(UpdateCompanyRequest $request, Company $company)
    {

        $company->update([
            'name' => $request->input('name'),
            'location' => $request->input('location')
        ]);

        return new CompanyResource($company);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response(null, 204);
    }
}
