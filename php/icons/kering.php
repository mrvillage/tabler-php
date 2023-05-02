<?php
require_once('../Icon.php');

class IconKering extends Icon {
    public static function getName(): string {
        return 'kering';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 15v-3.5a2.5 2.5 0 1 1 5 0v3.5m0 -2h-5" />   <path d="M3 9l3 6l3 -6" />   <path d="M9 20l6 -16" />
        SVG;
    }
}