<?php
require_once(__DIR__ . '../Icon.php');

class IconMountainOff extends Icon {
    public static function getName(): string {
        return 'mountain-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.281 14.26l-4.201 -8.872a2.3 2.3 0 0 0 -4.158 0l-.165 .349m-1.289 2.719l-5.468 11.544h17" />   <path d="M7.5 11l2 2.5l2 -2" />   <path d="M3 3l18 18" />
        SVG;
    }
}