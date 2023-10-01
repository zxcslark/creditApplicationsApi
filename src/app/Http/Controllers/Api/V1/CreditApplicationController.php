<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreditApplicationStoreRequest;
use App\Http\Requests\UpdateCreditApplicationRequest;
use App\Http\Resources\CreditApplicationResource;
use App\Models\CreditApplication;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;

class CreditApplicationController extends Controller
{
    public function index(Request $request) : ResourceCollection
    {
        return CreditApplicationResource::collection(CreditApplication::all());
    }

    public function show(Request $request, CreditApplication $creditApplication) : JsonResource
    {
        return CreditApplicationResource::make($creditApplication);
    }

    public function store(CreditApplicationStoreRequest $request) : JsonResource
    {
        return CreditApplicationResource::make(CreditApplication::create($request->validated()));
    }


    public function update(UpdateCreditApplicationRequest $request, CreditApplication $creditApplication) : JsonResource
    {
        $creditApplication->update($request->validated());

        return CreditApplicationResource::make($creditApplication);
    }

    public function destroy(CreditApplication $creditApplication) : Response
    {
        $creditApplication->delete();

        return response()->noContent();
    }
}
