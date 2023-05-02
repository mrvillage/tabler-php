<?php
require_once('../Icon.php');

class IconFileShredder extends Icon {
    public static function getName(): string {
        return 'file-shredder';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3v4a1 1 0 0 0 1 1h4" />   <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />   <path d="M3 12l18 0" />   <path d="M6 16l0 2" />   <path d="M10 16l0 6" />   <path d="M14 16l0 2" />   <path d="M18 16l0 4" />
        SVG;
    }
}