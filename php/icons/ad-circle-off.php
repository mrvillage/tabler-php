<?php
require_once(__DIR__ . '/../Icon.php');

class IconAdCircleOff extends Icon {
    public static function getName(): string {
        return 'ad-circle-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.91 4.949a9.968 9.968 0 0 0 -2.91 7.051c0 5.523 4.477 10 10 10a9.968 9.968 0 0 0 7.05 -2.909" />   <path d="M20.778 16.793a9.955 9.955 0 0 0 1.222 -4.793c0 -5.523 -4.477 -10 -10 -10c-1.74 0 -3.376 .444 -4.8 1.225" />   <path d="M7 15v-4.5a1.5 1.5 0 0 1 2.138 -1.358" />   <path d="M9.854 9.853c.094 .196 .146 .415 .146 .647v4.5" />   <path d="M7 13h3" />   <path d="M14 14v1h1" />   <path d="M17 13v-2a2 2 0 0 0 -2 -2h-1v1" />   <path d="M3 3l18 18" />
        SVG;
    }
}