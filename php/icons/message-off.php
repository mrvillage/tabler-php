<?php
require_once('../Icon.php');

class IconMessageOff extends Icon {
    public static function getName(): string {
        return 'message-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h1m4 0h3" />   <path d="M8 13h5" />   <path d="M8 4h10a3 3 0 0 1 3 3v8c0 .577 -.163 1.116 -.445 1.573m-2.555 1.427h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8c0 -1.085 .576 -2.036 1.439 -2.562" />   <path d="M3 3l18 18" />
        SVG;
    }
}