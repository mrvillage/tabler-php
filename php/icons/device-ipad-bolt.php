<?php
require_once('../Icon.php');

class IconDeviceIpadBolt extends Icon {
    public static function getName(): string {
        return 'device-ipad-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7" />   <path d="M9 18h4" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}