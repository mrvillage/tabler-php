<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyRipple extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-ripple';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M10 12h3l2 -2.5" />   <path d="M15 14.5l-2 -2.5" />
        SVG;
    }
}