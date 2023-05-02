<?php
require_once(__DIR__ . '/../Icon.php');

class IconCornerDownRight extends Icon {
    public static function getName(): string {
        return 'corner-down-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4" />
        SVG;
    }
}