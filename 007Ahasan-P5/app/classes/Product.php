<?php


namespace App\classes;
use App\classes\Category;
class Product
{
    public $products;
    public $category;
    public $categoryById;
    public $brand;
    public $result = [];

    public function getAllProduct()
    {
        return [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'name' => 'Sony XPeria XZ',
                'price' => 55600,
                'image' => '1.png',
                'description' => 'Sony XPeria XZ Description. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'brand_id' => 3,
                'name' => 'New Hatil Phone',
                'price' => 25600,
                'image' => '2.png',
                'description' => 'New Hatil Phone Description. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            2 => [
                'id' => 3,
                'category_id' => 3,
                'brand_id' => 2,
                'name' => 'New Party Dress',
                'price' => 1600,
                'image' => '3.png',
                'description' => 'New Party Dress Description. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            3 => [
                'id' => 4,
                'category_id' => 3,
                'brand_id' => 2,
                'name' => 'New Soft Shoe',
                'price' => 1200,
                'image' => '4.png',
                'description' => 'New Soft Shoe Description. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            4 => [
                'id' => 5,
                'category_id' => 2,
                'brand_id' => 2,
                'name' => 'Fashionable T Shirt',
                'price' => 2200,
                'image' => '4.png',
                'description' => 'Fashionable T Shirt Description. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            5 => [
                'id' => 6,
                'category_id' => 4,
                'brand_id' => 3,
                'name' => 'New Fashionable Bed',
                'price' => 80200,
                'image' => '4.png',
                'description' => 'New Fashionable Bed Description. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
            6 => [
                'id' => 7,
                'category_id' => 4,
                'brand_id' => 3,
                'name' => 'New Sova Set',
                'price' => 100000,
                'image' => '4.png',
                'description' => 'New Sova Set Description. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
            ],
        ];
    }

    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                $this->category = new Category();
                $this->categoryById = $this->category->getCategoryInfo($product['category_id']);
                $product['category_name'] = $this->categoryById['name'];
                return $product;
            }
        }
    }

    public function getCategoryProduct($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $id)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }
}