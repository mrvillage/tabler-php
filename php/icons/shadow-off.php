<?php
require_once(__DIR__ . '/../Icon.php');

class IconShadowOff extends Icon {
    public static function getName(): string {
        return 'shadow-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.634 5.638a9 9 0 0 0 12.728 12.727m1.68 -2.32a9 9 0 0 0 -12.086 -12.088" />   <path d="M16 12h2" />   <path d="M13 15h2" />   <path d="M13 18h1" />   <path d="M13 9h4" />   <path d="M13 6h1" />   <path d="M3 3l18 18" />
        SVG;
    }
}