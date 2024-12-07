<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function getModel();
    public function getAll();
    public function find($id);
    public function findOrFail($id);
    public function create($attributes = []);
    public function update($id, $attributes = []);
    public function delete($id);
}