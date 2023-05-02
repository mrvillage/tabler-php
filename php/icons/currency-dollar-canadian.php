<?php
require_once('../Icon.php');

class IconCurrencyDollarCanadian extends Icon {
    public static function getName(): string {
        return 'currency-dollar-canadian';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 6h-4a3 3 0 0 0 0 6h1a3 3 0 0 1 0 6h-4" />   <path d="M10 18h-1a6 6 0 1 1 0 -12h1" />   <path d="M17 20v-2" />   <path d="M18 6v-2" />
        SVG;
    }
}