<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceSpeaker extends Icon {
    public static function getName(): string {
        return 'device-speaker';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M12 14m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 7l0 .01" />
        SVG;
    }
}