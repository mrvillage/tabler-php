<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRotate2 extends Tabler\Icon {
    public static function getName(): string {
        return 'rotate-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 4.55a8 8 0 0 0 -6 14.9m0 -4.45v5h-5" />   <path d="M18.37 7.16l0 .01" />   <path d="M13 19.94l0 .01" />   <path d="M16.84 18.37l0 .01" />   <path d="M19.37 15.1l0 .01" />   <path d="M19.94 11l0 .01" />
        SVG;
    }
}