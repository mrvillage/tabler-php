<?php
require_once(__DIR__ . '/../Icon.php');

class IconRadioactiveOff extends Icon {
    public static function getName(): string {
        return 'radioactive-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14.118 14.127c-.182 .181 -.39 .341 -.618 .473l3 5.19a9 9 0 0 0 1.856 -1.423m1.68 -2.32a8.993 8.993 0 0 0 .964 -4.047h-5" />   <path d="M13.5 9.4l3 -5.19a9 9 0 0 0 -8.536 -.25" />   <path d="M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6" />   <path d="M3 3l18 18" />
        SVG;
    }
}