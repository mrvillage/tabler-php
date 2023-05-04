<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTriangleInverted extends \Tabler\Icon {
    public static function getName(): string {
        return 'triangle-inverted';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10.24 20.043l-8.422 -14.06a1.989 1.989 0 0 1 1.7 -2.983h16.845a1.989 1.989 0 0 1 1.7 2.983l-8.422 14.06a1.989 1.989 0 0 1 -3.4 0z" />
        SVG;
    }
}