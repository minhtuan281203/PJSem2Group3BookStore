<?php

namespace App\Services;

class BaseService implements ServiceInterface
{
    public $repository;

    public function all()
    {
        // TODO: Implement all() method.
        return $this->repository->all();
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
        return $this->repository->find($id);
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
        return $this->repository->update($data, $id);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        return $this->repository->delete($id);
    }
}
