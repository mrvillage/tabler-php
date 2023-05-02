<?php
require_once(__DIR__ . '/../Icon.php');

class IconSwords extends Icon {
    public static function getName(): string {
        return 'swords';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 3v5l-11 9l-4 4l-3 -3l4 -4l9 -11z" />   <path d="M5 13l6 6" />   <path d="M14.32 17.32l3.68 3.68l3 -3l-3.365 -3.365" />   <path d="M10 5.5l-2 -2.5h-5v5l3 2.5" />
        SVG;
    }
}