<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowWaveRightUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-wave-right-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 10h4v4" />   <path d="M3 12c.887 -1.284 2.48 -2.033 4 -2c1.52 -.033 3.113 .716 4 2s2.48 2.033 4 2c1.52 .033 3 -1 4 -2l2 -2" />
        SVG;
    }
}