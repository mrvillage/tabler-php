<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCellSignalOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'cell-signal-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 20h-15.269a.731 .731 0 0 1 -.517 -1.249l7.265 -7.264m2 -2l5.272 -5.272a.731 .731 0 0 1 1.249 .517v11.269" />   <path d="M3 3l18 18" />
        SVG;
    }
}