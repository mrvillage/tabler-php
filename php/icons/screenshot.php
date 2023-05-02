<?php
require_once(__DIR__ . '../Icon.php');

class IconScreenshot extends Icon {
    public static function getName(): string {
        return 'screenshot';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 19a2 2 0 0 1 -2 -2" />   <path d="M5 13v-2" />   <path d="M5 7a2 2 0 0 1 2 -2" />   <path d="M11 5h2" />   <path d="M17 5a2 2 0 0 1 2 2" />   <path d="M19 11v2" />   <path d="M19 17v4" />   <path d="M21 19h-4" />   <path d="M13 19h-2" />
        SVG;
    }
}