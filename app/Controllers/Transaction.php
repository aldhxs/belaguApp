<?php

namespace App\Controllers;

use CodeIgniter\Entity\Cast\TimestampCast;

class Transaction extends BaseController
{
    protected $transactionModel;
    public function __construct()
    {
        $this->transactionModel = new \App\Models\TransactionModel;
    }
    public function index()
    {
        helper('text');
        $data =
            [
                'title' => "Transaction",
                'transaction' => $this->transactionModel->getTransaction()->getResult()
            ];
        return view('transaction.php', $data);
    }

    public function save()
    {
        $this->transactionModel->save([
            'id_user' => 1,
            'id_ticket' => $this->request->getVar('id_ticket'),
            'kode' => 'INV' . date('dmyhs'),
            'harga' => 80000,
        ]);

        return redirect()->to(base_url('/your-order'));
    }
}
