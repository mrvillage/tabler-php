<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceTabletCog extends Icon {
    public static function getName(): string {
        return 'device-tablet-cog';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21h-6a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v7.5" />   <path d="M12 16a1 1 0 0 0 0 2" />   <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19.001 15.5v1.5" />   <path d="M19.001 21v1.5" />   <path d="M22.032 17.25l-1.299 .75" />   <path d="M17.27 20l-1.3 .75" />   <path d="M15.97 17.25l1.3 .75" />   <path d="M20.733 20l1.3 .75" />
        SVG;
    }
}