<?php
require_once(__DIR__ . '/../Icon.php');

class IconRoadSign extends Icon {
    public static function getName(): string {
        return 'road-sign';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.446 2.6l7.955 7.954a2.045 2.045 0 0 1 0 2.892l-7.955 7.955a2.045 2.045 0 0 1 -2.892 0l-7.955 -7.955a2.045 2.045 0 0 1 0 -2.892l7.955 -7.955a2.045 2.045 0 0 1 2.892 0z" />   <path d="M9 14v-2c0 -.59 .414 -1 1 -1h5" />   <path d="M13 9l2 2l-2 2" />
        SVG;
    }
}