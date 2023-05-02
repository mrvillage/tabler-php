<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowRampLeft3 extends Icon {
    public static function getName(): string {
        return 'arrow-ramp-left-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 3v6" />   <path d="M8 16l-4 -4l4 -4" />   <path d="M18 21v-6a3 3 0 0 0 -3 -3h-11" />
        SVG;
    }
}