<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockRecord extends \Tabler\Icon {
    public static function getName(): string {
        return 'clock-record';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12.3a9 9 0 1 0 -8.683 8.694" />   <path d="M12 7v5l2 2" />   <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}