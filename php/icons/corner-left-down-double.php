<?php
require_once(__DIR__ . '/../Icon.php');

class IconCornerLeftDownDouble extends Icon {
    public static function getName(): string {
        return 'corner-left-down-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 4h-6a3 3 0 0 0 -3 3v7" />   <path d="M13 10l-4 4l-4 -4m8 5l-4 4l-4 -4" />
        SVG;
    }
}