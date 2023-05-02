<?php
require_once(__DIR__ . '../Icon.php');

class IconBmp extends Icon {
    public static function getName(): string {
        return 'bmp';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 16v-8h2a2 2 0 1 1 0 4h-2" />   <path d="M6 14a2 2 0 0 1 -2 2h-2v-8h2a2 2 0 1 1 0 4h-2h2a2 2 0 0 1 2 2z" />   <path d="M9 16v-8l3 6l3 -6v8" />
        SVG;
    }
}