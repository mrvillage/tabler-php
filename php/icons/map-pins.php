<?php
require_once(__DIR__ . '/../Icon.php');

class IconMapPins extends Icon {
    public static function getName(): string {
        return 'map-pins';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10.828 9.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />   <path d="M8 7l0 .01" />   <path d="M18.828 17.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />   <path d="M16 15l0 .01" />
        SVG;
    }
}