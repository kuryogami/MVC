<?php
class User extends controller {
    public function index() {
      $this->view('user/index');
    }
    public function profile($nama = "Linux", $pekerjaan = "Devs") {
      $data["nama"] = $nama;
      $data["pekerjaan"] = $pekerjaan;
      $this->view("user/profile", $data);
    }
  }
?>