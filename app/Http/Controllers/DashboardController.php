<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Smalot\PdfParser\Parser;

class DashboardController extends AuthController
{
   
    
    
    public function index(){
        $parser = new Parser();

        $pdf    = $parser->parseFile('http://expenses.test/resumen_cuenta_visa_Mar_2020.pdf');


        $rows = explode(PHP_EOL, $pdf->getText());

        
        foreach ($rows as $key => $row) {
            //preg_match("/[a-zA-Z0-9 ]+/", ltrim($row), $match);
            $row = preg_replace('/\s\s+/', '-/-', trim($row));

            $match = explode('-/-',$row);
            //$pattern = '/[0-9]{4}.(0[1-9]|1[0-2]).(0[1-9]|[1-2][0-9]|3[0-1])/';
            $pattern = '/[0-9]{2}.(0[1-9]|1[0-2]).(0[1-9]|[1-2][0-9]|3[0-1])/';

             if (!preg_match($pattern, $match[0]))
             {
                 continue;
             }
            echo '<pre>';
                print_r($match);
            echo '</pre>';
        }
        
    }
}
