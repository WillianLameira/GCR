<?php

namespace App\Utils;

class View
{
    /**
     * Método responsável por retonar o conteúdo de uma view
     *
     * @param string $view
     * @return string
     */
    private static function getContentView($view)
    {
        $file = __DIR__.'/../../resources/views/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file): '';
    }
    /**
     * Método responsável por retornar o conteúdo de uma view
     *
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string
     */
    public static function render($view, $vars = [])
    {
        //Conteúdo da View
        $contentView = self::getContentView($view);
        
        //Chaves do Array de variáveis
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);

        //Retorna Conteúdo Renderizado
        return str_replace($keys, array_values($vars),$contentView);
        
    }
}
