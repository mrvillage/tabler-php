<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockX extends Icon {
    public static function getName(): string {
        return 'clock-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.926 13.15a9 9 0 1 0 -7.835 7.784" />   <path d="M12 7v5l2 2" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}