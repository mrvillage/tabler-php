<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowRotaryFirstLeft extends Icon {
    public static function getName(): string {
        return 'arrow-rotary-first-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 10a3 3 0 1 1 0 -6a3 3 0 0 1 0 6z" />   <path d="M16 10v10" />   <path d="M13.5 9.5l-8.5 8.5" />   <path d="M10 18h-5v-5" />
        SVG;
    }
}