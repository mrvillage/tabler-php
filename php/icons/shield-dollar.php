<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShieldDollar extends Icon {
    public static function getName(): string {
        return 'shield-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.018 20.687c-.333 .119 -.673 .223 -1.018 .313a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3c.433 1.472 .575 2.998 .436 4.495" />   <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M19 21v1m0 -8v1" />
        SVG;
    }
}