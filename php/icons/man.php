<?php
require_once(__DIR__ . '../Icon.php');

class IconMan extends Icon {
    public static function getName(): string {
        return 'man';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 16v5" />   <path d="M14 16v5" />   <path d="M9 9h6l-1 7h-4z" />   <path d="M5 11c1.333 -1.333 2.667 -2 4 -2" />   <path d="M19 11c-1.333 -1.333 -2.667 -2 -4 -2" />   <path d="M12 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
        SVG;
    }
}