<?php
require_once(__DIR__ . '/../Icon.php');

class IconEyeglass2 extends Icon {
    public static function getName(): string {
        return 'eyeglass-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h-2l-3 10v2.5" />   <path d="M16 4h2l3 10v2.5" />   <path d="M10 16l4 0" />   <path d="M17.5 16.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" />   <path d="M6.5 16.5m-3.5 0a3.5 3.5 0 1 0 7 0a3.5 3.5 0 1 0 -7 0" />
        SVG;
    }
}