<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCrystalBall extends \Tabler\Icon {
    public static function getName(): string {
        return 'crystal-ball';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.73 17.018a8 8 0 1 1 10.54 0" />   <path d="M5 19a2 2 0 0 0 2 2h10a2 2 0 1 0 0 -4h-10a2 2 0 0 0 -2 2z" />   <path d="M11 7a3 3 0 0 0 -3 3" />
        SVG;
    }
}