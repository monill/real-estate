<?php

use App\Models\PropertyImage;

/**
 * Gera caracteres aleatórios utilizando valores MD5
 */
if (!function_exists('md5Gen')) {
    function md5Gen()
    {
        return md5(uniqid() . time() . microtime());
    }
}

/**
 * Função não utilizada
 * Futuramente checar o tamanho de cada pasta/arquivo individualmente/total
 */
if (!function_exists('makeSize')) {
    function makeSize(int $bytes, int $decimals = 2)
    {
        $size = [' B', ' kB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB'];
        $floor = (int)floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $floor)) . $size[$floor];
    }
}

/**
 * Retorna no formato Brasil e traduzido a data: Dia de Mês de Ano
 */
if (!function_exists('diaMesAno')) {
    function diaMesAno()
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        return strftime('%A, %d de %B de %Y', strtotime('today'));
    }
}

/**
 * Checa o URL que o usuário está navegando
 * Seta classe como active para página atual
 */
if (!function_exists('ativePage')) {
    function ativePage(string $url)
    {
        return request()->is($url) ? 'class=active' : '';
    }
}

/**
 * Formata o valor da propriedade para o formato Brasileiro
 */
if (!function_exists('priceFormat')) {
    function priceFormat(float $price)
    {
        return number_format($price, 2, ',', '.');
    }
}

/**
 * Retorna a imagem principal setada pelos corretores/admins
 * Caso imagem não for setada, retorna uma imagem 404 não encontrada
 */
if (!function_exists('proprtyMainImage')) {
    function propertyMainImage(int $id)
    {
        $image = PropertyImage::where('property_id', '=', $id)->where('feature', '=', true)->first();
        if (!$image) {
            return asset('uploads/404.jpg');;
        } else {
            return asset('uploads/properties/' . $id . '/' . $image->image);
        }
    }
}

/**
 * Formata o valor da propriedade passada em formulário
 * Removendo os pontos e virgulas salvando no banco
 */
if (!function_exists('formatPrice')) {
    function formatPrice($price)
    {
        $step1 = str_replace('.', '', $price);
        $step2 = str_replace(',', '.', $step1);
        return $step2;
    }
}
