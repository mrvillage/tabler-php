<?php
require_once(__DIR__ . '../Icon.php');

class IconSpaceOff extends Icon {
    public static function getName(): string {
        return 'space-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10v3a1 1 0 0 0 1 1h9m4 0h1a1 1 0 0 0 1 -1v-3" />   <path d="M3 3l18 18" />
        SVG;
    }
}