<?php
require_once('../Icon.php');

class IconDialpadOff extends Icon {
    public static function getName(): string {
        return 'dialpad-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 7h-4v-4" />   <path d="M17 3h4v4h-4z" />   <path d="M10 6v-3h4v4h-3" />   <path d="M3 10h4v4h-4z" />   <path d="M17 13v-3h4v4h-3" />   <path d="M14 14h-4v-4" />   <path d="M10 17h4v4h-4z" />   <path d="M3 3l18 18" />
        SVG;
    }
}