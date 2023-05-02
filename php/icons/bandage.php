<?php
require_once(__DIR__ . '/../Icon.php');

class IconBandage extends Icon {
    public static function getName(): string {
        return 'bandage';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 12l0 .01" />   <path d="M10 12l0 .01" />   <path d="M12 10l0 .01" />   <path d="M12 14l0 .01" />   <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7" />
        SVG;
    }
}