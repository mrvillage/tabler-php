<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconReceiptOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'receipt-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 21v-16m2 -2h10a2 2 0 0 1 2 2v10m0 4.01v1.99l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />   <path d="M11 7l4 0" />   <path d="M9 11l2 0" />   <path d="M13 15l2 0" />   <path d="M15 11l0 .01" />   <path d="M3 3l18 18" />
        SVG;
    }
}