<?php namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\ReviewModel;

class Product extends BaseController
{
	public function index($id)
	{
        $productModel = new ProductModel();
        $reviewModel = new ReviewModel();

		return view('product', ["product" => $productModel ->find($id)], ["reviews" => $reviewModel ->find($id)]);  //poner bien el id del review
	}
}