<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandAo3 extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-ao3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 5c7.109 4.1 10.956 10.131 12 14c1.074 -4.67 4.49 -8.94 8 -11" />   <path d="M14 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 9c-.278 5.494 -2.337 7.33 -4 10c4.013 -2 6.02 -5 15.05 -5c4.012 0 3.51 2.5 1 3c2 .5 2.508 5 -2.007 2" />
        SVG;
    }
}