<?php
require_once(__DIR__ . '../Icon.php');

class IconAntennaBarsOff extends Icon {
    public static function getName(): string {
        return 'antenna-bars-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 18v-3" />   <path d="M10 18v-6" />   <path d="M14 18v-4" />   <path d="M14 10v-1" />   <path d="M18 14v-8" />   <path d="M3 3l18 18" />
        SVG;
    }
}