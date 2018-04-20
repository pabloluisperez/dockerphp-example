<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 20/04/18
 * Time: 10:33
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}