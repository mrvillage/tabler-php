<?php
require_once(__DIR__ . '../Icon.php');

class IconNumber extends Icon {
    public static function getName(): string {
        return 'number';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 17v-10l7 10v-10" />   <path d="M15 17h5" />   <path d="M17.5 10m-2.5 0a2.5 3 0 1 0 5 0a2.5 3 0 1 0 -5 0" />
        SVG;
    }
}