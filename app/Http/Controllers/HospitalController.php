<?php

namespace App\Http\Controllers;

use App\Services\HospitalService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    private $hospitalService;

    public function __construct(HospitalService $hospitalService)
    {
        $this->hospitalService = $hospitalService;
    }

    public function index(): JsonResponse
    {
        $hospitals = $this->hospitalService->getAllHospitals();
        return response()->json($hospitals);
    }

    public function store(Request $request): JsonResponse
    {
        $hospital = $this->hospitalService->createHospital($request->all());
        return response()->json($hospital, 201);
    }

    public function show(int $id): JsonResponse
    {
        $hospital = $this->hospitalService->getHospitalById($id);
        return response()->json($hospital);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->hospitalService->deleteHospital($id);
        return response()->json(['message' => 'Hospital deleted successfully']);
    }
}
