<?php
require_once('../Icon.php');

class IconShoppingCartPlus extends Icon {
    public static function getName(): string {
        return 'shopping-cart-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 17h-11v-14h-2" />   <path d="M6 5l6 .429m7.138 6.573l-.143 1h-13" />   <path d="M15 6h6m-3 -3v6" />
        SVG;
    }
}