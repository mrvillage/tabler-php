<?php
require_once(__DIR__ . '../Icon.php');

class IconWifi0 extends Icon {
    public static function getName(): string {
        return 'wifi-0';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18l.01 0" />
        SVG;
    }
}