<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Http\Resources\CompanyResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;


class CompanyController extends ResponseController
{

    public function index(): JsonResponse
    {
        return $this->createResponse((CompanyResource::collection(Company::all()))->toArray(request()));
    }

    public function store(StoreCompanyRequest $request): JsonResponse
    {
        $company = Company::create([
            'name' => $request->input('name'),
            'location' => $request->input('location')
        ]);

        return $this->createResponse((new CompanyResource($company))->toArray(request()));
    }

    public function show(Company $company): JsonResponse
    {
        return $this->createResponse((new CompanyResource($company))->toArray(request()));
    }

    public function update(UpdateCompanyRequest $request, Company $company): JsonResponse
    {

        $company->update([
            'name' => $request->input('name'),
            'location' => $request->input('location')
        ]);

        return new CompanyResource($company);
    }

    public function destroy(Company $company): Response
    {
        $company->delete();
        return response(null, 204);
    }
}
