<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDevicesBolt extends Tabler\Icon {
    public static function getName(): string {
        return 'devices-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 19v-10a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v3.5" />   <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9" />   <path d="M19 16l-2 3h4l-2 3" />   <path d="M16 9h2" />
        SVG;
    }
}