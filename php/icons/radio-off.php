<?php
require_once(__DIR__ . '/../Icon.php');

class IconRadioOff extends Icon {
    public static function getName(): string {
        return 'radio-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3l-4.986 2m-2.875 1.15l-1.51 .604a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 .708 -.294m.292 -3.706v-8a1 1 0 0 0 -1 -1h-8m-4 0h-2.5" />   <path d="M4 12h8m4 0h4" />   <path d="M7 12v-2" />   <path d="M13 16v.01" />   <path d="M3 3l18 18" />
        SVG;
    }
}