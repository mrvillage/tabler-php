<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCalendarPin extends Tabler\Icon {
    public static function getName(): string {
        return 'calendar-pin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-6.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />   <path d="M16 3v4" />   <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />   <path d="M19 18v.01" />   <path d="M8 3v4" />   <path d="M4 11h16" />
        SVG;
    }
}