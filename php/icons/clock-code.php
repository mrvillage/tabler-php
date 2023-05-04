<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockCode extends \Tabler\Icon {
    public static function getName(): string {
        return 'clock-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.931 13.111a9 9 0 1 0 -9.453 7.874" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />   <path d="M12 7v5l2 2" />
        SVG;
    }
}