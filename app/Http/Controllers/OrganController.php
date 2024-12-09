<?php

namespace App\Http\Controllers;

use App\Services\OrganService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrganController extends Controller
{
    private $organService;

    public function __construct(OrganService $organService)
    {
        $this->organService = $organService;
    }

    public function index(): JsonResponse
    {
        $organs = $this->organService->getAllOrgans();
        return response()->json($organs);
    }

    public function store(Request $request): JsonResponse
    {
        $organ = $this->organService->createOrgan($request->all());
        return response()->json($organ, 201);
    }

    public function show(int $id): JsonResponse
    {
        $organ = $this->organService->getOrganById($id);
        return response()->json($organ);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->organService->deleteOrgan($id);
        return response()->json(['message' => 'Organ deleted successfully']);
    }
}
