<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table         = 'ticket';
    protected $primaryKey    = 'id_ticket';
    protected $useTimestamps = true;
    protected $createdField  = 'tgl';
    protected $allowedFields = ['id_artist', 'id_genre', 'id_local', 'location', 'description', 'gambar'];

    public function getTicket($id_ticket = false)
    {
        if ($id_ticket == false) {
            $query = $this->db->table('ticket')->join('local', 'ticket.id_local = local.id_local')
                ->orderBy("jumlah_tiket", "desc")
                ->get();
            return $query;
        }
        return $this->join('artist', 'ticket.id_artist = artist.id_artist')
            ->join('local', 'ticket.id_local = local.id_local')
            ->join('genre', 'ticket.id_genre = genre.id_genre')
            ->where(['id_ticket' => $id_ticket])->first();
    }
}
