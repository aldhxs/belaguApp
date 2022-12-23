<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table         = 'transaction';
    protected $primaryKey    = 'id_transaction';
    protected $useTimestamps = true;
    protected $createdField  = 'tgl';
    protected $updatedField  = 'tgl_update';
    protected $allowedFields = ['id_user', 'id_ticket', 'kode', 'harga'];

    public function getTransaction($id_transaction = false)
    {
        if ($id_transaction == false) {
            $builder = $this->db->table('transaction');
            $builder->join('user', 'transaction.id_user = user.id_user');
            $builder->join('ticket', 'transaction.id_ticket = ticket.id_ticket');
            $builder->orderBy("transaction.tgl", "desc");
            $query = $builder->get();
            return $query;
        }

        return $this->where(['id_transaction' => $id_transaction])->first();
    }
}
