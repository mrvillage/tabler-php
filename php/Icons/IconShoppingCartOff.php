<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShoppingCartOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'shopping-cart-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 17a2 2 0 1 0 2 2" />   <path d="M17 17h-11v-11" />   <path d="M9.239 5.231l10.761 .769l-1 7h-2m-4 0h-7" />   <path d="M3 3l18 18" />
        SVG;
    }
}