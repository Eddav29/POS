<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('category.index');
    }

    public function foodBeverage() {
        return view('category.foodBeverages');
    }

    public function beautyHealth() {
        return view('category.beautyHealth');
    }

    public function homeCare() {
        return view('category.homeCare');
    }

    public function babyKid() {
        return view('category.babyKid');
    }
}
