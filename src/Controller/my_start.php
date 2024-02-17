<?php


namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class my_start
{
    #[Route('/start')]
    public function start(){
        $form = "
            <form>
                <input type='text' name='text'>
                <input type='checkbox' name='check'>
                <input type='submit' value='Отправить'>
            </form>
        ";

        return new Response("$form");
    }

}