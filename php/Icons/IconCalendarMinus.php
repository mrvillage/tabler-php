<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCalendarMinus extends \Tabler\Icon {
    public static function getName(): string {
        return 'calendar-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-6.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8" />   <path d="M16 3v4" />   <path d="M8 3v4" />   <path d="M4 11h16" />   <path d="M16 19h6" />
        SVG;
    }
}