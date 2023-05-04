<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyLitecoin extends Tabler\Icon {
    public static function getName(): string {
        return 'currency-litecoin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 19h-8.194a2 2 0 0 1 -1.98 -2.283l1.674 -11.717" />   <path d="M14 9l-9 4" />
        SVG;
    }
}