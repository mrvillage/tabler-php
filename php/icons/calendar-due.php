<?php
require_once('../Icon.php');

class IconCalendarDue extends Icon {
    public static function getName(): string {
        return 'calendar-due';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M16 3v4" />   <path d="M8 3v4" />   <path d="M4 11h16" />   <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}