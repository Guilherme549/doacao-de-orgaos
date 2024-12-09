<?php

namespace App\Services;

use App\Models\Organ;

class OrganService
{
    public function getAllOrgans()
    {
        return Organ::all();
    }

    public function createOrgan(array $data)
    {
        return Organ::create($data);
    }

    public function getOrganById(int $id)
    {
        return Organ::findOrFail($id);
    }

    public function deleteOrgan(int $id)
    {
        $organ = Organ::findOrFail($id);
        $organ->delete();
        return $organ;
    }
}
