<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCurrencyKroneCzech extends \Tabler\Icon {
    public static function getName(): string {
        return 'currency-krone-czech';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 6v12" />   <path d="M5 12c3.5 0 6 -3 6 -6" />   <path d="M5 12c3.5 0 6 3 6 6" />   <path d="M19 6l-2 2l-2 -2" />   <path d="M19 12h-2a3 3 0 0 0 0 6h2" />
        SVG;
    }
}