<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSumOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'sum-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 18a1 1 0 0 1 -1 1h-11l6 -7m-3 -7h8a1 1 0 0 1 1 1v2" />   <path d="M3 3l18 18" />
        SVG;
    }
}