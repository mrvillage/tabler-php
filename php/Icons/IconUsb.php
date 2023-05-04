<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconUsb extends \Tabler\Icon {
    public static function getName(): string {
        return 'usb';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 17v-11.5" />   <path d="M7 10v3l5 3" />   <path d="M12 14.5l5 -2v-2.5" />   <path d="M16 10h2v-2h-2z" />   <path d="M7 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M10 5.5h4l-2 -2.5z" />
        SVG;
    }
}