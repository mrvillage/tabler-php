<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceIpadHorizontalDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-ipad-horizontal-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 20h-7a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v6.5" />   <path d="M9 17h3.5" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />
        SVG;
    }
}