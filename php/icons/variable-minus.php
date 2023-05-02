<?php
require_once(__DIR__ . '/../Icon.php');

class IconVariableMinus extends Icon {
    public static function getName(): string {
        return 'variable-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 16c1.5 0 3 -2 4 -3.5s2.5 -3.5 4 -3.5" />   <path d="M5 4c-2.5 5 -2.5 10 0 16m14 -16c1.775 3.55 2.29 7.102 1.544 11.01m-11.544 -6.01h1c1 0 1 1 2.016 3.527c.782 1.966 .943 3 1.478 3.343" />   <path d="M8 16c1.5 0 3 -2 4 -3.5s2.5 -3.5 4 -3.5" />   <path d="M16 19h6" />
        SVG;
    }
}