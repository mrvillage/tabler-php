<?php
require_once(__DIR__ . '../Icon.php');

class IconBrowserOff extends Icon {
    public static function getName(): string {
        return 'browser-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h11a1 1 0 0 1 1 1v11m-.288 3.702a1 1 0 0 1 -.712 .298h-14a1 1 0 0 1 -1 -1v-14c0 -.276 .112 -.526 .293 -.707" />   <path d="M4 8h4m4 0h8" />   <path d="M3 3l18 18" />
        SVG;
    }
}