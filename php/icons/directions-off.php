<?php
require_once(__DIR__ . '../Icon.php');

class IconDirectionsOff extends Icon {
    public static function getName(): string {
        return 'directions-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21v-4" />   <path d="M12 13v-1" />   <path d="M12 5v-2" />   <path d="M10 21h4" />   <path d="M8 8v1h1m4 0h6l2 -2l-2 -2h-10" />   <path d="M14 14v3h-8l-2 -2l2 -2h7" />   <path d="M3 3l18 18" />
        SVG;
    }
}