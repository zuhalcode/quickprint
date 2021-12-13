<?php 


class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getEmail($data)
    {
        $password = $data['password'];
        $email = $data['email'];
        $password_db = $this->db->single($this->db->query('SELECT password FROM `user` WHERE email = \''. $email . '\''));
        if ( password_verify($password, $password_db['password'])) {
            header('Location:' . BASEURL . '/home');
        } else {
            header('Location:' . BASEURL);
        }
    }

    public function insertData($data)
    {
        $query = "INSERT INTO user
                    VALUES
                    ('', :nama, :email, :password, :role_id, :tanggal_dibuat)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind('role_id', 1);
        $this->db->bind('tanggal_dibuat', '');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function insertCetak($data, $form) 
    {
        $user = $this->getAllData();
        $query = "INSERT INTO form
                    VALUES
                    ('', :jumlah_halaman, :cetak_id, :user_id, :harga, :nama_file)";

        $this->db->query($query);
        $this->db->bind('jumlah_halaman', $data['number']);
        $this->db->bind('cetak_id', 1);
        $this->db->bind('user_id', $user[0]['id']);
        $this->db->bind('harga', 20000);
        $this->db->bind('nama_file', $form['file']['name']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteData($id)
    {
        $query = "DELETE FROM data_mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateData($data)
    {
        $query = "UPDATE data_mahasiswa SET
                    Nama = :Nama,
                    NIM = :NIM,
                    Email = :Email,
                    Universitas = :Universitas,
                    Fakultas = :Fakultas,
                    Jurusan = :Jurusan
                    WHERE ID = :ID ";

        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('NIM', $data['NIM']);
        $this->db->bind('Email', $data['Email']);
        $this->db->bind('Universitas', $data['Universitas']);
        $this->db->bind('Fakultas', $data['Fakultas']);
        $this->db->bind('Jurusan', $data['Jurusan']);
        $this->db->bind('ID', $data['ID']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM data_mahasiswa WHERE Nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}