<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyKroneSwedish extends Icon {
    public static function getName(): string {
        return 'currency-krone-swedish';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 6v12" />   <path d="M5 12c3.5 0 6 -3 6 -6" />   <path d="M5 12c3.5 0 6 3 6 6" />   <path d="M15 10v8" />   <path d="M19 10a4 4 0 0 0 -4 4" />
        SVG;
    }
}