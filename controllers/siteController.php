<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class siteController extends Controller{
    public function home()
    {
        $params=[
            'name' =>"3liwaate"
        ];
        return $this->render('home',$params);
    }
    public function contact()
    {
        return $this->render('contact');
    }
    public function handelContact(Request $request)
    {
        $body=$request->getBody();
        echo'<pre>';
        var_dump($body) ;
        echo'</pre>';
        exit;
        return 'handling  submited data';
    }

}