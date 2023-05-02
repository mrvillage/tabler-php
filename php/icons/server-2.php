<?php
require_once(__DIR__ . '../Icon.php');

class IconServer2 extends Icon {
    public static function getName(): string {
        return 'server-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M7 8l0 .01" />   <path d="M7 16l0 .01" />   <path d="M11 8h6" />   <path d="M11 16h6" />
        SVG;
    }
}