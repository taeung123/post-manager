<?php

namespace VCComponent\Laravel\Post\Repositories;

use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use VCComponent\Laravel\Post\Entities\PostSchemaType;

class PostSchemaTypeRepositoryEloquent extends BaseRepository implements PostSchemaTypeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */

    public function model()
    {
        return PostSchemaType::class;
    }

    public function getEntity()
    {
        return $this->model;
    }

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function findById($id)
    {
        $schema = $this->model->find($id);
        if (!$schema) {
            throw new \Exception('Không tìm thấy thuộc tính !', 1);
        }
        return $schema;
    }
}
