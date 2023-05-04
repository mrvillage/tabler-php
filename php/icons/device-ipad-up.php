<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceIpadUp extends Tabler\Icon {
    public static function getName(): string {
        return 'device-ipad-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 18h3" />   <path d="M19 22v-6" />   <path d="M22 19l-3 -3l-3 3" />   <path d="M13.5 21h-6.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v7" />
        SVG;
    }
}