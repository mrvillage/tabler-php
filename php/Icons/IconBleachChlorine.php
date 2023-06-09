<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBleachChlorine extends \Tabler\Icon {
    public static function getName(): string {
        return 'bleach-chlorine';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />   <path d="M11 12h-1a2 2 0 1 0 0 4h1" />   <path d="M14 12v4h2" />
        SVG;
    }
}