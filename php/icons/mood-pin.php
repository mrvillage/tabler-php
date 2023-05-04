<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodPin extends Icon {
    public static function getName(): string {
        return 'mood-pin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 0 -8.352 8.977" />   <path d="M9 10h.01" />   <path d="M15 10h.01" />   <path d="M9.5 15c.658 .672 1.56 1 2.5 1c.102 0 .203 -.004 .304 -.012" />   <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />   <path d="M19 18v.01" />
        SVG;
    }
}