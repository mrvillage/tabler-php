<?php
require_once(__DIR__ . '../Icon.php');

class IconPepper extends Icon {
    public static function getName(): string {
        return 'pepper';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 11c0 2.21 -2.239 4 -5 4s-5 -1.79 -5 -4a8 8 0 1 0 16 0a3 3 0 0 0 -6 0" />   <path d="M16 8c0 -2 2 -4 4 -4" />
        SVG;
    }
}