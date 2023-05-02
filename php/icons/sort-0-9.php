<?php
require_once(__DIR__ . '../Icon.php');

class IconSort09 extends Icon {
    public static function getName(): string {
        return 'sort-0-9';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 12h2" />   <path d="M4 10v4a2 2 0 1 0 4 0v-4a2 2 0 1 0 -4 0z" />   <path d="M16 15a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-6a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h3" />
        SVG;
    }
}