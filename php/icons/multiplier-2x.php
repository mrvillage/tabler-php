<?php
require_once(__DIR__ . '/../Icon.php');

class IconMultiplier2x extends Icon {
    public static function getName(): string {
        return 'multiplier-2x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 16l4 -4" />   <path d="M18 16l-4 -4" />   <path d="M6 10a2 2 0 1 1 4 0c0 .591 -.417 1.318 -.816 1.858l-3.184 4.143l4 0" />
        SVG;
    }
}