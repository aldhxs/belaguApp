<?php

namespace App\Models;

use CodeIgniter\Model;

class ComingModel extends Model
{
    protected $table         = 'ticket';
    protected $primaryKey    = 'id_ticket';
    protected $useTimestamps = true;
    protected $createdField  = 'tgl';
    protected $allowedFields = ['id_artist', 'id_genre', 'id_local', 'location', 'description', 'gambar'];

    public function getComing()
    {
        $builder = $this->db->table('ticket');
        $builder->join('local', 'ticket.id_local = local.id_local');
        $builder->join('genre', 'ticket.id_genre = genre.id_genre');
        $builder->join('artist', 'ticket.id_artist = artist.id_artist');
        $builder->orderBy("tgl", "asc");
        $query = $builder->get();
        return $query;
    }
}
