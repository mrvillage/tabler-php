<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconComponentsOff extends Tabler\Icon {
    public static function getName(): string {
        return 'components-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12l3 3l3 -3l-3 -3z" />   <path d="M18.5 14.5l2.5 -2.5l-3 -3l-2.5 2.5" />   <path d="M12.499 8.501l2.501 -2.501l-3 -3l-2.5 2.5" />   <path d="M9 18l3 3l3 -3l-3 -3z" />   <path d="M3 3l18 18" />
        SVG;
    }
}