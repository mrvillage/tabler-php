<?php
require_once(__DIR__ . '../Icon.php');

class IconClockBolt extends Icon {
    public static function getName(): string {
        return 'clock-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.984 12.53a9 9 0 1 0 -7.552 8.355" />   <path d="M12 7v5l3 3" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}