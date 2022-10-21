<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\BaseService;

class ProductService extends BaseService implements ProductRepositoryInterface
{
    public $repository;

    public function __construct(ProductRepositoryInterface $productRepository){
        $this->repository = $productRepository;
    }

//    public function find($id)
//    {
//        $product = $this->repository->find($id);
//    }

    public function getFeatureProducts(){
        return [
            "commic" => $this->repository->getFeatureProductByCategory('1'),
            "economy" => $this->repository->getFeatureProductByCategory('2'),
            "textbook" => $this->repository->getFeatureProductByCategory('3'),
        ];
    }
}
