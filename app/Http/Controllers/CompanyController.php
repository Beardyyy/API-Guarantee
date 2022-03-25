<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\JsonResponse;


class CompanyController extends ResponseController
{

    public function index(): JsonResponse
    {
        return $this->createResponse((CompanyResource::collection(Company::all()))->toArray());
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
        return $this->createResponse((new CompanyResource($company))->toArray(request()));
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {

        $company->update([
            'name' => $request->input('name'),
            'location' => $request->input('location')
        ]);

        return new CompanyResource($company);
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return response(null, 204);
    }
}
