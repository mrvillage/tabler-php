<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZoomReplace extends Icon {
    public static function getName(): string {
        return 'zoom-replace';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 21l-6 -6" />   <path d="M3.291 8a7 7 0 0 1 5.077 -4.806a7.021 7.021 0 0 1 8.242 4.403" />   <path d="M17 4v4h-4" />   <path d="M16.705 12a7 7 0 0 1 -5.074 4.798a7.021 7.021 0 0 1 -8.241 -4.403" />   <path d="M3 16v-4h4" />
        SVG;
    }
}