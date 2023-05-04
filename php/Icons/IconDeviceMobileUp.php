<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceMobileUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-mobile-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v7" />   <path d="M19 22v-6" />   <path d="M22 19l-3 -3l-3 3" />   <path d="M11 4h2" />   <path d="M12 17v.01" />
        SVG;
    }
}