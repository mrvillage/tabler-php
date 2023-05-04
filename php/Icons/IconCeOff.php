<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCeOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'ce-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 4a7.99 7.99 0 0 0 -2.581 .426" />   <path d="M5.867 5.864a8 8 0 0 0 5.133 14.136" />   <path d="M20 4a8 8 0 0 0 -7.29 4.7" />   <path d="M12 12a8 8 0 0 0 8 8" />   <path d="M16 12h4" />   <path d="M3 3l18 18" />
        SVG;
    }
}