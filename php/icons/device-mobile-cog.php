<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceMobileCog extends Icon {
    public static function getName(): string {
        return 'device-mobile-cog';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21h-4a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v6.5" />   <path d="M11 4h2" />   <path d="M12 17v.01" />   <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19.001 15.5v1.5" />   <path d="M19.001 21v1.5" />   <path d="M22.032 17.25l-1.299 .75" />   <path d="M17.27 20l-1.3 .75" />   <path d="M15.97 17.25l1.3 .75" />   <path d="M20.733 20l1.3 .75" />
        SVG;
    }
}