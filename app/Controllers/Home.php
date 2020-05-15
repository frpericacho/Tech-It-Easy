<?php namespace App\Controllers;

use App\Models\ProductModel;

class Home extends BaseController
{
	public function index()
	{
		$productModel = new ProductModel();
		return view('home',["products" => $productModel ->findAll()]);
	}
}