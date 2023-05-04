<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconToolsKitchenOff extends Icon {
    public static function getName(): string {
        return 'tools-kitchen-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3h5l-.5 4.5m-.4 3.595l-.1 .905h-6l-.875 -7.874" />   <path d="M7 18h2v3h-2z" />   <path d="M15.225 11.216c.42 -2.518 1.589 -5.177 4.775 -8.216v12h-1" />   <path d="M20 15v1m0 4v1h-1v-2" />   <path d="M8 12v6" />   <path d="M3 3l18 18" />
        SVG;
    }
}