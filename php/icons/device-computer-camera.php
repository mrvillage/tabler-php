<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceComputerCamera extends Tabler\Icon {
    public static function getName(): string {
        return 'device-computer-camera';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M8 16l-2.091 3.486a1 1 0 0 0 .857 1.514h10.468a1 1 0 0 0 .857 -1.514l-2.091 -3.486" />
        SVG;
    }
}