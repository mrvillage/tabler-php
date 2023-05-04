<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCloudSnow extends Tabler\Icon {
    public static function getName(): string {
        return 'cloud-snow';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7" />   <path d="M11 15v.01m0 3v.01m0 3v.01m4 -4v.01m0 3v.01" />
        SVG;
    }
}