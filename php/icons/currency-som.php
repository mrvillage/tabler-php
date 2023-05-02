<?php
require_once(__DIR__ . '/../Icon.php');

class IconCurrencySom extends Icon {
    public static function getName(): string {
        return 'currency-som';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 18v-12h-5v10a2 2 0 0 1 -2 2" />   <path d="M14 6v12h4a3 3 0 0 0 0 -6h-4h4a3 3 0 0 0 0 -6h-4z" />
        SVG;
    }
}