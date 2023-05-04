<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTank extends Tabler\Icon {
    public static function getName(): string {
        return 'tank';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v0a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M6 12l1 -5h5l3 5" />   <path d="M21 9l-7.8 0" />
        SVG;
    }
}