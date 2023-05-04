<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandD3 extends Icon {
    public static function getName(): string {
        return 'brand-d3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4h1.8c3.976 0 7.2 3.582 7.2 8s-3.224 8 -7.2 8h-1.8" />   <path d="M12 4h5.472c1.948 0 3.528 1.79 3.528 4s-1.58 4 -3.528 4" />   <path d="M17.472 12h-2.472" />   <path d="M17.472 12h-2.352" />   <path d="M17.472 12c1.948 0 3.528 1.79 3.528 4s-1.58 4 -3.528 4h-5.472" />
        SVG;
    }
}