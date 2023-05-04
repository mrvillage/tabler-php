<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTabletMinus extends Icon {
    public static function getName(): string {
        return 'device-tablet-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-6.5a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v11" />   <path d="M12.872 16.51a1 1 0 1 0 -.872 1.49" />   <path d="M16 19h6" />
        SVG;
    }
}