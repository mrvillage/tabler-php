<?php
require_once('../Icon.php');

class IconWifi1 extends Icon {
    public static function getName(): string {
        return 'wifi-1';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18l.01 0" />   <path d="M9.172 15.172a4 4 0 0 1 5.656 0" />
        SVG;
    }
}