<?php
require_once('../Icon.php');

class IconHomeOff extends Icon {
    public static function getName(): string {
        return 'home-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12h-2l4.497 -4.497m2 -2l2.504 -2.504l9 9h-2" />   <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2m0 -4v-3" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2m2 2v6" />   <path d="M3 3l18 18" />
        SVG;
    }
}