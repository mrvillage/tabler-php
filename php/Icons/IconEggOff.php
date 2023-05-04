<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEggOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'egg-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17.927 17.934c-1.211 1.858 -3.351 2.953 -5.927 3.066c-4.2 0 -7 -2.763 -7 -6.917c0 -2.568 .753 -5.14 1.91 -7.158" />   <path d="M8.642 4.628c1.034 -1.02 2.196 -1.63 3.358 -1.628c3.5 .007 7 5.545 7 11.083c0 .298 -.015 .587 -.045 .868" />   <path d="M3 3l18 18" />
        SVG;
    }
}