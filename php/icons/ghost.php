<?php
require_once(__DIR__ . '../Icon.php');

class IconGhost extends Icon {
    public static function getName(): string {
        return 'ghost';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />   <path d="M10 10l.01 0" />   <path d="M14 10l.01 0" />   <path d="M10 14a3.5 3.5 0 0 0 4 0" />
        SVG;
    }
}