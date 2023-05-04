<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockOff extends Icon {
    public static function getName(): string {
        return 'clock-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.633 5.64a9 9 0 1 0 12.735 12.72m1.674 -2.32a9 9 0 0 0 -12.082 -12.082" />   <path d="M12 7v1" />   <path d="M3 3l18 18" />
        SVG;
    }
}