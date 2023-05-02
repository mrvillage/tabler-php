<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrencyReal extends Icon {
    public static function getName(): string {
        return 'currency-real';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 6h-4a3 3 0 0 0 0 6h1a3 3 0 0 1 0 6h-4" />   <path d="M4 18v-12h3a3 3 0 1 1 0 6h-3c5.5 0 5 4 6 6" />   <path d="M18 6v-2" />   <path d="M17 20v-2" />
        SVG;
    }
}