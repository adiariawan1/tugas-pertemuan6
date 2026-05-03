<?php

class mahasiswa {
    private $conn;

    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    
    public function ReadData() {
        $sql = "SELECT * FROM Mahasiswa";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function CreateData($nim, $nama, $jurusan, $alamat, $email, $no_hp) {
        $sql = "INSERT INTO Mahasiswa (nim, nama, jurusan, alamat, email, no_hp) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        
        return $stmt->execute([$nim, $nama, $jurusan, $alamat, $email, $no_hp]);
    }

    
    public function UpdateData($nim, $nama, $jurusan, $alamat, $email, $no_hp) {
        $sql = "UPDATE Mahasiswa SET nama=?, jurusan=?, alamat=?, email=?, no_hp=? WHERE nim=?";
        $stmt = $this->conn->prepare($sql);
        
        return $stmt->execute([$nama, $jurusan, $alamat, $email, $no_hp, $nim]);
    }

    
    public function DeleteData($nim) {
        $sql = "DELETE FROM Mahasiswa WHERE nim=?";
        $stmt = $this->conn->prepare($sql);
        
        return $stmt->execute([$nim]);
    }
}