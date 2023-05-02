<?php
require_once(__DIR__ . '/../Icon.php');

class IconSubscript extends Icon {
    public static function getName(): string {
        return 'subscript';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 7l8 10m-8 0l8 -10" />   <path d="M21 20h-4l3.5 -4a1.73 1.73 0 0 0 -3.5 -2" />
        SVG;
    }
}