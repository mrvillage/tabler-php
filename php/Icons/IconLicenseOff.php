<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLicenseOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'license-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 1 0 4 0v-2m0 -4v-8a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -.864 .126m-2.014 2.025a3 3 0 0 0 -.122 .849v11" />   <path d="M11 7h2" />   <path d="M9 11h2" />   <path d="M3 3l18 18" />
        SVG;
    }
}