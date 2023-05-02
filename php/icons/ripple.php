<?php
require_once('../Icon.php');

class IconRipple extends Icon {
    public static function getName(): string {
        return 'ripple';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 7c3 -2 6 -2 9 0s6 2 9 0" />   <path d="M3 17c3 -2 6 -2 9 0s6 2 9 0" />   <path d="M3 12c3 -2 6 -2 9 0s6 2 9 0" />
        SVG;
    }
}