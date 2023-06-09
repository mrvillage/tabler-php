<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBasket extends \Tabler\Icon {
    public static function getName(): string {
        return 'basket';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 10l5 -6l5 6" />   <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z" />   <path d="M12 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}