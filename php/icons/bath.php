<?php
require_once(__DIR__ . '/../Icon.php');

class IconBath extends Icon {
    public static function getName(): string {
        return 'bath';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12h16a1 1 0 0 1 1 1v3a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4v-3a1 1 0 0 1 1 -1z" />   <path d="M6 12v-7a2 2 0 0 1 2 -2h3v2.25" />   <path d="M4 21l1 -1.5" />   <path d="M20 21l-1 -1.5" />
        SVG;
    }
}