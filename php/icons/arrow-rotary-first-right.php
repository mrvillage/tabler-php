<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowRotaryFirstRight extends Icon {
    public static function getName(): string {
        return 'arrow-rotary-first-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M8 10v10" />   <path d="M10.5 9.5l8.5 8.5" />   <path d="M14 18h5v-5" />
        SVG;
    }
}