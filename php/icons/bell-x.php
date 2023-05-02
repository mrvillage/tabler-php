<?php
require_once(__DIR__ . '../Icon.php');

class IconBellX extends Icon {
    public static function getName(): string {
        return 'bell-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 17h-9a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v2" />   <path d="M9 17v1a3 3 0 0 0 4.194 2.753" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}