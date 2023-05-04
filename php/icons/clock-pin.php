<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockPin extends Icon {
    public static function getName(): string {
        return 'clock-pin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.971 11.278a9 9 0 1 0 -8.313 9.698" />   <path d="M12 7v5l1.5 1.5" />   <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />   <path d="M19 18v.01" />
        SVG;
    }
}