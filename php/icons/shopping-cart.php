<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShoppingCart extends \Tabler\Icon {
    public static function getName(): string {
        return 'shopping-cart';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 17h-11v-14h-2" />   <path d="M6 5l14 1l-1 7h-13" />
        SVG;
    }
}