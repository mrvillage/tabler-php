<?php
require_once(__DIR__ . '../Icon.php');

class IconTemplateOff extends Icon {
    public static function getName(): string {
        return 'template-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h11a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-7m-4 0h-3a1 1 0 0 1 -1 -1v-2c0 -.271 .108 -.517 .283 -.697" />   <path d="M4 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M16 12h4" />   <path d="M14 16h2" />   <path d="M14 20h6" />   <path d="M3 3l18 18" />
        SVG;
    }
}