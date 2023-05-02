<?php
require_once(__DIR__ . '../Icon.php');

class IconBorderCorners extends Icon {
    public static function getName(): string {
        return 'border-corners';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 4h2a2 2 0 0 1 2 2v2" />   <path d="M20 16v2a2 2 0 0 1 -2 2h-2" />   <path d="M8 20h-2a2 2 0 0 1 -2 -2v-2" />   <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />
        SVG;
    }
}