<?php
require_once(__DIR__ . '/../Icon.php');

class IconCalendarBolt extends Icon {
    public static function getName(): string {
        return 'calendar-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5" />   <path d="M16 3v4" />   <path d="M8 3v4" />   <path d="M4 11h16" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}