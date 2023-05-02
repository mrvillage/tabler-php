<?php
require_once(__DIR__ . '../Icon.php');

class IconMap extends Icon {
    public static function getName(): string {
        return 'map';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7l6 -3l6 3l6 -3l0 13l-6 3l-6 -3l-6 3l0 -13" />   <path d="M9 4l0 13" />   <path d="M15 7l0 13" />
        SVG;
    }
}