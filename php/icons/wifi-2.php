<?php
require_once(__DIR__ . '../Icon.php');

class IconWifi2 extends Icon {
    public static function getName(): string {
        return 'wifi-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18l.01 0" />   <path d="M9.172 15.172a4 4 0 0 1 5.656 0" />   <path d="M6.343 12.343a8 8 0 0 1 11.314 0" />
        SVG;
    }
}