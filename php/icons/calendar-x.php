<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCalendarX extends Tabler\Icon {
    public static function getName(): string {
        return 'calendar-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21h-7a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6.5" />   <path d="M16 3v4" />   <path d="M8 3v4" />   <path d="M4 11h16" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}