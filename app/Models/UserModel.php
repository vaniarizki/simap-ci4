<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['nim', 'nama', 'kelas', 'email', 'alamat', 'password', 'foto'];

    public function getUser($nim = null)
    {
        if ($nim == null) {
            $query = $this->table($this->table)->findAll();
            return $query;
        } else {
            $query = $this->table($this->table)->where('nim', $nim)->findAll();
            return $query;
        }
    }

    public function updateUser($nim, $data)
    {
        $query = $this->db->table($this->table)->update($data, ['nim' => $nim]);
        return $query;
    }
}
