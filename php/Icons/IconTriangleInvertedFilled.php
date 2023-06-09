<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTriangleInvertedFilled extends \Tabler\Icon {
    public static function getName(): string {
        return 'triangle-inverted-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19.007 3a3 3 0 0 1 2.828 3.94l-.068 .185l-.062 .126l-7.09 12.233a3 3 0 0 1 -5.137 .19l-.103 -.173l-7.1 -12.25l-.061 -.125a3 3 0 0 1 2.625 -4.125l.058 -.001l.06 .002l.043 -.002h14.007z" stroke-width="0" fill="currentColor" />
        SVG;
    }
}