<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyDollarZimbabwean extends Icon {
    public static function getName(): string {
        return 'currency-dollar-zimbabwean';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 6h-4a3 3 0 0 0 0 6h1a3 3 0 0 1 0 6h-4" />   <path d="M17 20v-2" />   <path d="M18 6v-2" />   <path d="M3 6h7l-7 12h7" />
        SVG;
    }
}