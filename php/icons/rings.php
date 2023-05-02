<?php
require_once('../Icon.php');

class IconRings extends Icon {
    public static function getName(): string {
        return 'rings';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M7 15v-11" />   <path d="M17 15v-11" />   <path d="M3 4h18" />
        SVG;
    }
}