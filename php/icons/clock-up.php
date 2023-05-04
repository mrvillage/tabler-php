<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'clock-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.983 12.548a9 9 0 1 0 -8.45 8.436" />   <path d="M19 22v-6" />   <path d="M22 19l-3 -3l-3 3" />   <path d="M12 7v5l2.5 2.5" />
        SVG;
    }
}