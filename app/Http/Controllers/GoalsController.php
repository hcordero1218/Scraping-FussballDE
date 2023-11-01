<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class GoalsController extends Controller
{
    public function catalog()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Alabaster Table',
                'price' => 12.99,
                'created' => '2019-01-04',
                'sales_count' => 32,
                'views_count' => 730,
            ],
            [
                'id' => 2,
                'name' => 'Zebra Table',
                'price' => 44.49,
                'created' => '2012-01-04',
                'sales_count' => 301,
                'views_count' => 3279,
            ],
            [
                'id' => 3,
                'name' => 'Coffee Table',
                'price' => 10.00,
                'created' => '2014-05-28',
                'sales_count' => 1048,
                'views_count' => 20123,
            ]
        ];

       
        $productPriceSorter = array_multisort(array_column($products, 'price'), SORT_DESC, $products);
        var_dump($productPriceSorter);

        /* $productSalesPerViewSorter = 0;
        
        $catalog = new Catalog($products);
        $productsSortedByPrice = $catalog->getProducts($productPriceSorter);
        $productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);
        */

        $finalArray = $this->addRatio($products);
        /* Order by price DESC*/
        array_multisort(array_column($finalArray, 'price'), SORT_DESC, $finalArray);
        //var_dump($finalArray);

        /* Order by ratio DESC*/
        array_multisort(array_column($finalArray, 'ratio'), SORT_DESC, $finalArray);
        //var_dump($finalArray);

        /* Order by price and ratio DESC*/
        array_multisort(
            array_column($finalArray, 'price'),
            SORT_DESC,
            array_column($finalArray, 'ratio'),
            SORT_DESC,
            $finalArray
        );
        var_dump($finalArray);
    }

    public function addRatio($products)
    {
        $dates = [];
        foreach ($products as $product) {
            $ratio = $product['sales_count'] / $product['views_count'];
            $dates[] = [
                'id'                => $product['id'],
                'name'              => $product['name'],
                'price'             => $product['price'],
                'created'           => $product['created'],
                'sales_count'       => $product['sales_count'],
                'views_count'       => $product['views_count'],
                'ratio'             => $ratio,
            ];
        }
        return $dates;
    }

}
