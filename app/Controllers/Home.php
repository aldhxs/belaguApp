<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $homeModel;
    protected $localModel;
    public function __construct()
    {
        $this->homeModel = new \App\Models\HomeModel;
        $this->localModel = new \App\Models\LocalModel;
    }
    public function index()
    {
        helper('text');
        helper('date');
        $data =
            [
                'title' => "Belagu Muziek",
                'ticket' => $this->homeModel->getTicket()->getResult(),
                'local' => $this->localModel->getLocal()
            ];
        return view('home.php', $data);
    }
    public function detail($id_ticket)
    {
        helper('text');
        helper('date');
        $data =
            [
                'title' => "Belagu Muziek",
                'ticket' => $this->homeModel->getTicket($id_ticket)
            ];
        return view('detail.php', $data);
    }
}
