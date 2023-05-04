<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockDown extends Tabler\Icon {
    public static function getName(): string {
        return 'clock-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.984 12.535a9 9 0 1 0 -8.431 8.448" />   <path d="M12 7v5l3 3" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />
        SVG;
    }
}