<?php
require_once('../Icon.php');

class IconMultiplier1x extends Icon {
    public static function getName(): string {
        return 'multiplier-1x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 16v-8l-2 2" />   <path d="M13 16l4 -4" />   <path d="M17 16l-4 -4" />
        SVG;
    }
}