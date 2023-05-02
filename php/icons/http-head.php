<?php
require_once(__DIR__ . '../Icon.php');

class IconHttpHead extends Icon {
    public static function getName(): string {
        return 'http-head';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 16v-8" />   <path d="M7 8v8" />   <path d="M3 12h4" />   <path d="M14 8h-4v8h4" />   <path d="M10 12h2.5" />   <path d="M17 16v-6a2 2 0 1 1 4 0v6" />   <path d="M17 13h4" />
        SVG;
    }
}