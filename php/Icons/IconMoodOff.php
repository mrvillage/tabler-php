<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMoodOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'mood-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.634 5.638a9 9 0 0 0 12.732 12.724m1.679 -2.322a9 9 0 0 0 -12.08 -12.086" />   <path d="M9 10h.01" />   <path d="M15 10h.01" />   <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}