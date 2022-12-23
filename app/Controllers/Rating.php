<?php

namespace App\Controllers;

class Rating extends BaseController
{
    protected $ratingModel;
    protected $localModel;
    public function __construct()
    {
        $this->ratingModel = new \App\Models\RatingModel;
        $this->localModel = new \App\Models\LocalModel;
    }
    public function index()
    {
        helper('text');
        $data =
            [
                'title' => "Rating",
                'rating' => $this->ratingModel->getRating()->getResult(),
                'local' => $this->localModel->getLocal()
            ];
        return view('rating.php', $data);
    }
    public function local($id_local)
    {
        helper('text');
        $data =
            [
                'title' => "Rating",
                'rating' => $this->ratingModel->getRating($id_local)->getResult(),
                'local' => $this->localModel->getLocal()
            ];
        return view('rating.php', $data);
    }
}
