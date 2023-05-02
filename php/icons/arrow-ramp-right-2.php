<?php
require_once('../Icon.php');

class IconArrowRampRight2 extends Icon {
    public static function getName(): string {
        return 'arrow-ramp-right-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3v8.707" />   <path d="M16 14l4 -4l-4 -4" />   <path d="M6 21c0 -6.075 4.925 -11 11 -11h3" />
        SVG;
    }
}