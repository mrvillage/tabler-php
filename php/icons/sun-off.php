<?php
require_once(__DIR__ . '../Icon.php');

class IconSunOff extends Icon {
    public static function getName(): string {
        return 'sun-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3l18 18" />   <path d="M16 12a4 4 0 0 0 -4 -4m-2.834 1.177a4 4 0 0 0 5.66 5.654" />   <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
        SVG;
    }
}