<?php
require_once('../Icon.php');

class IconMapPinExclamation extends Icon {
    public static function getName(): string {
        return 'map-pin-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M15.005 19.31l-1.591 1.59a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 13.592 -4.638" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}