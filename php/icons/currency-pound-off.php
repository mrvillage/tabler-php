<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyPoundOff extends Icon {
    public static function getName(): string {
        return 'currency-pound-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 18.5a6 6 0 0 1 -5 0a6 6 0 0 0 -5 .5a3 3 0 0 0 2 -2.5v-7.5m1.192 -2.825a4 4 0 0 1 6.258 .825m-3.45 6h-6" />   <path d="M3 3l18 18" />
        SVG;
    }
}