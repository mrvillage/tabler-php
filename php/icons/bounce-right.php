<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBounceRight extends Icon {
    public static function getName(): string {
        return 'bounce-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 15.5c3 -1 5.5 -.5 8 4.5c.5 -3 1.5 -5.5 3 -8" />   <path d="M18 9a2 2 0 1 1 0 -4a2 2 0 0 1 0 4z" />
        SVG;
    }
}