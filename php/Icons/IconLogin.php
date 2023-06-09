<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLogin extends \Tabler\Icon {
    public static function getName(): string {
        return 'login';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />   <path d="M20 12h-13l3 -3m0 6l-3 -3" />
        SVG;
    }
}