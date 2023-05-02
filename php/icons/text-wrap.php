<?php
require_once(__DIR__ . '/../Icon.php');

class IconTextWrap extends Icon {
    public static function getName(): string {
        return 'text-wrap';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6l16 0" />   <path d="M4 18l5 0" />   <path d="M4 12h13a3 3 0 0 1 0 6h-4l2 -2m0 4l-2 -2" />
        SVG;
    }
}