<?php
require_once(__DIR__ . '/../Icon.php');

class IconBorderSides extends Icon {
    public static function getName(): string {
        return 'border-sides';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8v8" />   <path d="M20 16v-8" />   <path d="M8 4h8" />   <path d="M8 20h8" />
        SVG;
    }
}