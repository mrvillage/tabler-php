<?php
require_once(__DIR__ . '/../Icon.php');

class IconClockPlus extends Icon {
    public static function getName(): string {
        return 'clock-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.984 12.535a9 9 0 1 0 -8.468 8.45" />   <path d="M16 19h6" />   <path d="M19 16v6" />   <path d="M12 7v5l3 3" />
        SVG;
    }
}