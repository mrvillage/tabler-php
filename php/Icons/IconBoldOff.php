<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBoldOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'bold-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5h4a3.5 3.5 0 0 1 2.222 6.204m-3.222 .796h-5v-5" />   <path d="M17.107 17.112a3.5 3.5 0 0 1 -3.107 1.888h-7v-7" />   <path d="M3 3l18 18" />
        SVG;
    }
}