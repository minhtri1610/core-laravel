<?php

namespace App\Repositories;

use App\Repositories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface
{
    /**
     * Summary of model
     *
     * @var mixed
     */
    protected $model;

    //khởi tạo
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * Summary of getModel
     *
     * @return void
     */
    abstract public function getModel();

    /**
     * Summary of setModel
     *
     * @return void
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Summary of getAll
     *
     * @return mixed
     */
    public function getAll(): mixed
    {
        return $this->model->get();
    }

    /**
     * Summary of find
     *
     * @param mixed $id
     * @return mixed
     */
    public function find($id): mixed
    {
        return $this->model->find($id);
    }

    /**
     * Get one or fail
     *
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Summary of create
     *
     * @param mixed $attributes
     * @return mixed
     */
    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
     * Summary of update
     *
     * @param mixed $id
     * @param mixed $attributes
     * @return mixed
     */
    public function update($id, $attributes = []): mixed
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);

            return $result;
        }

        return false;
    }

    /**
     * Summary of delete
     *
     * @param mixed $id
     * @return bool
     */
    public function delete($id): bool
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }
}