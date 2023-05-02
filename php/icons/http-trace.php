<?php
require_once(__DIR__ . '../Icon.php');

class IconHttpTrace extends Icon {
    public static function getName(): string {
        return 'http-trace';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 8h4" />   <path d="M5 8v8" />   <path d="M10 12h2a2 2 0 1 0 0 -4h-2v8m4 0l-3 -4" />   <path d="M17 16v-6a2 2 0 1 1 4 0v6" />   <path d="M17 13h4" />
        SVG;
    }
}