<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceDesktopCode extends Icon {
    public static function getName(): string {
        return 'device-desktop-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 16h-8.5a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v8" />   <path d="M7 20h4" />   <path d="M9 16v4" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />
        SVG;
    }
}