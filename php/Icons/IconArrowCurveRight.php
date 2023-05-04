<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowCurveRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-curve-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 7l4 -4l4 4" />   <path d="M14 3v4.394a6.737 6.737 0 0 1 -3 5.606a6.737 6.737 0 0 0 -3 5.606v2.394" />
        SVG;
    }
}