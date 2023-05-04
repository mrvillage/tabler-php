<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCreditCardOff extends Icon {
    public static function getName(): string {
        return 'credit-card-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3l18 18" />   <path d="M9 5h9a3 3 0 0 1 3 3v8a3 3 0 0 1 -.128 .87" />   <path d="M18.87 18.872a3 3 0 0 1 -.87 .128h-12a3 3 0 0 1 -3 -3v-8c0 -1.352 .894 -2.495 2.124 -2.87" />   <path d="M3 11l8 0" />   <path d="M15 11l6 0" />   <path d="M7 15l.01 0" />   <path d="M11 15l2 0" />
        SVG;
    }
}