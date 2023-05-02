<?php
require_once(__DIR__ . '/../Icon.php');

class IconMapPinMinus extends Icon {
    public static function getName(): string {
        return 'map-pin-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M12.758 21.337a2 2 0 0 1 -2.171 -.437l-4.244 -4.243a8 8 0 1 1 12.585 -1.652" />   <path d="M16 19h6" />
        SVG;
    }
}