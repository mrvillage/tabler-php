<?php
require_once('../Icon.php');

class IconLegoOff extends Icon {
    public static function getName(): string {
        return 'lego-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.5 11h.01" />   <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />   <path d="M8 4v-1h8v2h1a3 3 0 0 1 3 3v8m-.884 3.127a2.99 2.99 0 0 1 -2.116 .873v1h-10v-1a3 3 0 0 1 -3 -3v-9c0 -1.083 .574 -2.032 1.435 -2.56" />   <path d="M3 3l18 18" />
        SVG;
    }
}