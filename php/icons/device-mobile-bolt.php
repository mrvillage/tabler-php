<?php
require_once('../Icon.php');

class IconDeviceMobileBolt extends Icon {
    public static function getName(): string {
        return 'device-mobile-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 21h-5.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v7" />   <path d="M19 16l-2 3h4l-2 3" />   <path d="M11 4h2" />   <path d="M12 17v.01" />
        SVG;
    }
}