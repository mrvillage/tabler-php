<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandNordVpn extends Icon {
    public static function getName(): string {
        return 'brand-nord-vpn';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.992 15l-2.007 -3l-4.015 8c-2.212 -3.061 -2.625 -7.098 -.915 -10.463a10.14 10.14 0 0 1 8.945 -5.537a10.14 10.14 0 0 1 8.945 5.537c1.71 3.365 1.297 7.402 -.915 10.463l-4.517 -8l-1.505 1.5" />   <path d="M14.5 15l-3 -6l-2.5 4.5" />
        SVG;
    }
}