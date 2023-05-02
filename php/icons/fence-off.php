<?php
require_once(__DIR__ . '../Icon.php');

class IconFenceOff extends Icon {
    public static function getName(): string {
        return 'fence-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12h-8v4h12m4 0v-4h-4" />   <path d="M6 16v4h4v-4" />   <path d="M10 12v-2m0 -4l-2 -2m-2 2v6" />   <path d="M14 16v4h4v-2" />   <path d="M18 12v-6l-2 -2l-2 2v4" />   <path d="M3 3l18 18" />
        SVG;
    }
}