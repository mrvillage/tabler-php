<?php
require_once(__DIR__ . '../Icon.php');

class IconClockHour2 extends Icon {
    public static function getName(): string {
        return 'clock-hour-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 12l3 -2" />   <path d="M12 7v5" />
        SVG;
    }
}