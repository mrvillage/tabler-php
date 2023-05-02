<?php
require_once('../Icon.php');

class IconArrowRotaryLastRight extends Icon {
    public static function getName(): string {
        return 'arrow-rotary-last-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9 15v6" />   <path d="M11.5 9.5l6.5 -6.5" />   <path d="M13 3h5v5" />
        SVG;
    }
}