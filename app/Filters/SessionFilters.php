<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
class SessionAdmin implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    // if(isset($_SESSION['username'])){
      // return redirect()->to(base_url());
    // }
  }
  public function after( RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // if(!isset($_SESSION['username'])){
      // return redirect()->to(base_url('/Docente'));
    // }
  }

}
