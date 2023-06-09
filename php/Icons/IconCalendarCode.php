<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCalendarCode extends \Tabler\Icon {
    public static function getName(): string {
        return 'calendar-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.5 21h-5.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6" />   <path d="M16 3v4" />   <path d="M8 3v4" />   <path d="M4 11h16" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />
        SVG;
    }
}