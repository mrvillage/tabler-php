<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyEuro extends Icon {
    public static function getName(): string {
        return 'currency-euro';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17.2 7a6 7 0 1 0 0 10" />   <path d="M13 10h-8m0 4h8" />
        SVG;
    }
}