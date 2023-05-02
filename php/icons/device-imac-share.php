<?php
require_once('../Icon.php');

class IconDeviceImacShare extends Icon {
    public static function getName(): string {
        return 'device-imac-share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 17h-8.5a1 1 0 0 1 -1 -1v-12a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v9" />   <path d="M3 13h18" />   <path d="M8 21h4" />   <path d="M10 17l-.5 4" />   <path d="M16 22l5 -5" />   <path d="M21 21.5v-4.5h-4.5" />
        SVG;
    }
}