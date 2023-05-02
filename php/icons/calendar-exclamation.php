<?php
require_once('../Icon.php');

class IconCalendarExclamation extends Icon {
    public static function getName(): string {
        return 'calendar-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 21h-9a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5" />   <path d="M16 3v4" />   <path d="M8 3v4" />   <path d="M4 11h16" />   <path d="M11 15h1" />   <path d="M12 15v3" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}