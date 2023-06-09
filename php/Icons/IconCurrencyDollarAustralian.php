<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyDollarAustralian extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-dollar-australian';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 18l3.279 -11.476a.75 .75 0 0 1 1.442 0l3.279 11.476" />   <path d="M21 6h-4a3 3 0 0 0 0 6h1a3 3 0 0 1 0 6h-4" />   <path d="M17 20v-2" />   <path d="M18 6v-2" />   <path d="M4.5 14h5" />
        SVG;
    }
}