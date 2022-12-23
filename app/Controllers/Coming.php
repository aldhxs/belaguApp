<?php

namespace App\Controllers;

class Coming extends BaseController
{
    protected $comingModel;
    protected $localModel;
    public function __construct()
    {
        $this->comingModel = new \App\Models\ComingModel;
        $this->localModel = new \App\Models\LocalModel;
    }
    public function index()
    {
        helper('text');
        $data =
            [
                'title' => "Coming Up",
                'coming' => $this->comingModel->getComing()->getResult(),
                'local' => $this->localModel->getLocal()
            ];
        return view('coming-up.php', $data);
    }
}
