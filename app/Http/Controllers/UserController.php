<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Exibe a lista de todos os usuários.
     */
    public function index(): JsonResponse
    {
        try {
            $users = $this->userService->getAllUsers()->makeHidden(['password']);
            return response()->json($users, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar usuários.'], 500);
        }
    }

    /**
     * Cria um novo usuário.
     */
    public function store(UserRequest $request): JsonResponse
    {
        try {
            $user = $this->userService->createUser($request->validated());
            return response()->json(['message' => 'Usuário criado com sucesso!', 'data' => $user], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao criar usuário.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Exibe um usuário específico pelo ID.
     */
    public function show($id): JsonResponse
    {
        if (!is_numeric($id)) {
            return response()->json(['message' => 'ID inválido.'], 400);
        }

        try {
            $user = $this->userService->getUserById((int) $id);
            return response()->json($user, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao buscar o usuário.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Atualiza os dados de um usuário.
     */
    public function update(UserRequest $request, $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return response()->json(['message' => 'ID inválido.'], 400);
        }

        try {
            $user = $this->userService->updateUser((int) $id, $request->validated());
            return response()->json(['message' => 'Usuário atualizado com sucesso!', 'data' => $user], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao atualizar usuário.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove um usuário pelo ID.
     */
    public function destroy($id): JsonResponse
    {
        if (!is_numeric($id)) {
            return response()->json(['message' => 'ID inválido.'], 400);
        }

        try {
            $this->userService->deleteUser((int) $id);
            return response()->json(['message' => "Usuário com ID {$id} foi excluído com sucesso."], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Usuário não encontrado.'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao excluir usuário.', 'error' => $e->getMessage()], 500);
        }
    }
}
