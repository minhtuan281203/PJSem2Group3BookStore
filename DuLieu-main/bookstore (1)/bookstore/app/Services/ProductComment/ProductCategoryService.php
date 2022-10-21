<?php

namespace App\Services\ProductComment;

use App\Models\ProductComment;
use App\Repositories\BaseRepository;
use App\Services\BaseService;

class ProductCategoryService extends BaseService implements ProductCategoryRepositoryInterface
{
    public $repository;

    public function __construct(ProductCategoryRepositoryInterface $productCommentRepository)
    {
        $this->repository = $productCommentRepository;
    }
}
