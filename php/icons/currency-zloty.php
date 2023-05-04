<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyZloty extends Tabler\Icon {
    public static function getName(): string {
        return 'currency-zloty';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18h-7l7 -7h-7" />   <path d="M17 18v-13" />   <path d="M14 14.5l6 -3.5" />
        SVG;
    }
}