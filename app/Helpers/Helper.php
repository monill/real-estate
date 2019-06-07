<?php

use App\Models\PropertyImage;

/**
 * Retorna o endereço IP de quem está acessando o site
 */
if (!function_exists('getIP')) {
    function getIP()
    {
        // check for shared internet/ISP IP
        if (!empty($_SERVER['HTTP_CLIENT_IP']) && validIP($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        // check for IPs passing through proxies
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // check if multiple ips exist in var
            if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
                $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
                foreach ($iplist as $ip) {
                    if (validIP($ip)) {
                        return $ip;
                    }
                }
            } else {
                if (validIP($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    return $_SERVER['HTTP_X_FORWARDED_FOR'];
                }
            }
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED']) && validIP($_SERVER['HTTP_X_FORWARDED'])) {
            return $_SERVER['HTTP_X_FORWARDED'];
        }
        if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && validIP($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
            return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        }
        if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && validIP($_SERVER['HTTP_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_FORWARDED_FOR'];
        }
        if (!empty($_SERVER['HTTP_FORWARDED']) && validIP($_SERVER['HTTP_FORWARDED'])) {
            return $_SERVER['HTTP_FORWARDED'];
        }
        // return unreliable ip since all else failed
        return $_SERVER['REMOTE_ADDR'];
    }
}

/**
 * Valida o endereço IP de quem está acessando o site
 */
if (!function_exists('validIP')) {
    function validIP($ip)
    {
        if (strtolower($ip) === "ip_unknown") {
            return false;
        }
        // generate ipv4 network address
        $ip = ip2long($ip);
        // if the ip is set and not equivalent to 255.255.255.255
        if ($ip !== false && $ip !== -1) {
            // make sure to get unsigned long representation of ip due to discrepancies
            // between 32 and 64 bit OSes and signed numbers (ints default to signed in PHP)
            $ip = sprintf("%u", $ip);
            // do private network range checking
            if ($ip >= 0 && $ip <= 50331647) {
                return false;
            }
            if ($ip >= 167772160 && $ip <= 184549375) {
                return false;
            }
            if ($ip >= 2130706432 && $ip <= 2147483647) {
                return false;
            }
            if ($ip >= 2851995648 && $ip <= 2852061183) {
                return false;
            }
            if ($ip >= 2886729728 && $ip <= 2887778303) {
                return false;
            }
            if ($ip >= 3221225984 && $ip <= 3221226239) {
                return false;
            }
            if ($ip >= 3232235520 && $ip <= 3232301055) {
                return false;
            }
            if ($ip >= 4294967040) {
                return false;
            }
        }
        return true;
    }
}

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
        $floor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $floor)) . @$size[$floor];
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
