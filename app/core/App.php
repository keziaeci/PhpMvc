<?php 

class App {
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct() {
    $url = $this->parseURL();
    // Check if the controller exists

    // contoller
    if(file_exists('../app/controllers/' . $url[0]. '.php' )) {
      $this->controller = $url[0];
      unset($url[0]);
    } 
    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    // method
    if(isset($url[1])) {
      if(method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }
    // params
    if(!empty($url)) {
      // unutk mengambil nilai array
      $this->params = array_values($url);
    }

    // jalankan controller & method, serta kirimkan n  params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
  }
  
  public function parseURL() {
    if (isset($_GET['url'])){
      //rtrim is for removing last slash
      $url = rtrim($_GET['url'], '/');
      //filter_var is for filtering the url from unwanted characters
      $url = filter_var($url, FILTER_SANITIZE_URL);
      //explode is for splitting the url into an array
      $url = explode('/', $url);
      return $url;
    }
  }
}

?>