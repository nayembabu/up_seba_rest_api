<?php 
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class CorsFilter.phpFilter implements FilterInterface
{
    public function before(RequestInterface request)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface request, ResponseInterface response)
    {
        
    }
}