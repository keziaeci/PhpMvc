<?php 

class About extends Controller{
  
  // nama dan status ditangkap dari url sebagai parameter
  public function index($nama = 'ecik' , $status = 'siswi', $umur = 16) {
    $data['judul'] = 'About me';
    $this->view('templates/header' , $data);
    $this->view('about/index', ['nama' => $nama, 'status' => $status , 'umur' => $umur]);
    $this->view('templates/footer');
  }
  
  public function page() {
    $data['judul'] = 'Pages';
    $this->view('about/page' , $data);
  } 
}

?>