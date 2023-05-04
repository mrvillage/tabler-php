<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconIceCream2 extends Tabler\Icon {
    public static function getName(): string {
        return 'ice-cream-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17.657 11a6 6 0 1 0 -11.315 0" />   <path d="M6.342 11l5.658 11l5.657 -11z" />
        SVG;
    }
}