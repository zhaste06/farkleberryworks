<?php

/**
 * View model for the featured products.
 *
 * @author jam
 * @version 180428
 */
class ProductsVM {

    public $featuredProductIds;
    public $errorMsg;
    public $products;
    public $product;
    public $category;
    private $productDAM;
    private $categoryDAM;

    public function __construct() {
        $this->productDAM = new ProductDAM();
        $this->categoryDAM = new CategoryDAM();
        $this->errorMsg = '';
        $this->featuredProductIds = array(1, 7, 9);
        $this->products = array();
        $this->product = '';
        $this->category = '';
    }

    public static function getFeaturedInstance() {
        $vm = new self();
        foreach ($vm->featuredProductIds as $productId) {
            $product = $vm->productDAM->readProduct($productId);

            // Add product to array
            $vm->products[] = $product;
        }
        return $vm;
    }

    public static function getCategoryInstance($deletedProductCategoryId = null) {
        $vm = new self();
        if ($deletedProductCategoryId === null) {
            $categoryId = intPOST('categoryId');
            if ($categoryId === null) {
                $categoryId = intGET('categoryId');
            }
        } else {
            $categoryId = $deletedProductCategoryId;
        }
        if ($categoryId === null) {
            $categoryId = 1;
        }
        $vm->products = $vm->productDAM->readProductsByCategoryId($categoryId);
        $vm->category = $vm->categoryDAM->readCategory($categoryId);
        return $vm;
    }

    public static function getProductInstance() {
        $vm = new self();
        $productId = intGET('productId');
        $vm->product = $vm->productDAM->readProduct($productId);
        return $vm;
    }

    public static function getEditProductInstance() {
        $vm = new self();
        $productId = intPOST('productId');
        $vm->product = $vm->productDAM->readProduct($productId);
        return $vm;
    }

    public static function getDeleteInstance() {
        $vm = new self();
        $productId = intPOST('productId');
        $categoryId = intPOST('categoryId');
        if ($productId == null) {
            $productId = intGET('productId');
            $categoryId = intGET('categoryId');
        }
        $vm->productDAM->deleteProductById($productId);
        $vm->category = $vm->categoryDAM->readCategory($categoryId);
        return $vm;
    }

    public static function getAddEditInstance() {
        $vm = new self();
        $productId = intPOST('productId');
        if ($productId === null || !$productId) {
            $productId = '';
        }
        $varArray = array('id' => $productId,
            'categoryId' => intPOST('categoryId'),
            'productCode' => intPOST('code'),
            'name' => hPOST('name'),
            'listPrice' => floatPOST('price'),
            'discountPercent' => floatPOST('discountPercent'),
            'description' => hPOST('description'));
        $vm->product = new Product($varArray);
        $vm->category = $vm->categoryDAM->readCategory($vm->product->categoryId);
        $vm->productDAM->writeProduct($vm->product);
        return $vm;
    }

}
