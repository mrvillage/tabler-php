<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockExclamation extends \Tabler\Icon {
    public static function getName(): string {
        return 'clock-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.986 12.502a9 9 0 1 0 -5.973 7.98" />   <path d="M12 7v5l3 3" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}