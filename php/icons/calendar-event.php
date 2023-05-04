<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCalendarEvent extends Tabler\Icon {
    public static function getName(): string {
        return 'calendar-event';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M16 3l0 4" />   <path d="M8 3l0 4" />   <path d="M4 11l16 0" />   <path d="M8 15h2v2h-2z" />
        SVG;
    }
}