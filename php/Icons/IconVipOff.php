<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVipOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'vip-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5h2m4 0h12" />   <path d="M3 19h16" />   <path d="M4 9l2 6h1l2 -6" />   <path d="M12 12v3" />   <path d="M16 12v-3h2a2 2 0 1 1 0 4h-1" />   <path d="M3 3l18 18" />
        SVG;
    }
}