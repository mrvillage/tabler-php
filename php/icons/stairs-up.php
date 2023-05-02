<?php
require_once(__DIR__ . '/../Icon.php');

class IconStairsUp extends Icon {
    public static function getName(): string {
        return 'stairs-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20h4v-4h4v-4h4v-4h4" />   <path d="M4 11l7 -7v4m-4 -4h4" />
        SVG;
    }
}