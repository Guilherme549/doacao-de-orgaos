<?php

namespace App\Services;

use App\Models\Hospital;

class HospitalService
{
    public function getAllHospitals()
    {
        return Hospital::all();
    }

    public function createHospital(array $data)
    {
        return Hospital::create($data);
    }

    public function getHospitalById(int $id)
    {
        return Hospital::findOrFail($id);
    }

    public function deleteHospital(int $id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();
        return $hospital;
    }
}
