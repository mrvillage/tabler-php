<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBallBaseball extends Tabler\Icon {
    public static function getName(): string {
        return 'ball-baseball';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.636 18.364a9 9 0 1 0 12.728 -12.728a9 9 0 0 0 -12.728 12.728z" />   <path d="M12.495 3.02a9 9 0 0 1 -9.475 9.475" />   <path d="M20.98 11.505a9 9 0 0 0 -9.475 9.475" />   <path d="M9 9l2 2" />   <path d="M13 13l2 2" />   <path d="M11 7l2 1" />   <path d="M7 11l1 2" />   <path d="M16 11l1 2" />   <path d="M11 16l2 1" />
        SVG;
    }
}