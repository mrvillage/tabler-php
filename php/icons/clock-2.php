<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClock2 extends Icon {
    public static function getName(): string {
        return 'clock-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 1a1 1 0 0 1 1 -1h14a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1 -1z" />   <path d="M12 7v5l3 3" />   <path d="M4 12h1" />   <path d="M19 12h1" />   <path d="M12 19v1" />
        SVG;
    }
}