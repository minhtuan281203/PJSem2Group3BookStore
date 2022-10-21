<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;

abstract class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return Product::class;
    }

    public function getFeatureProductByCategory(int $categoryId){
        return $this->model->where('feature', true)
            ->where('product_category_id', $categoryId)
            ->get();
    }
}
