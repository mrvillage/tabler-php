<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClockPlay extends Icon {
    public static function getName(): string {
        return 'clock-play';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 7v5l2 2" />   <path d="M17 22l5 -3l-5 -3z" />   <path d="M13.017 20.943a9 9 0 1 1 7.831 -7.292" />
        SVG;
    }
}