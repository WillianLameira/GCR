<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home extends Page{
    /**
     * Metodo responsável por retornar o conteúdo (View da nossa home)
     *
     * @return string
     */
    public static function getHome(){
        $title = 'GCR - Home';
        $content = View::render('pages/home', [
            'name' => 'GCR - Gerenciador de Cobrança Recorrente',
            'description' => 'Nunca foi tão fácil gerenciar sua cobrança recorrentes.',
            'site' => 'rastrail.com.br'
        ]);

        return parent::getPage($title, $content);
    }
}
?>