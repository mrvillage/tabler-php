<?php
require_once(__DIR__ . '../Icon.php');

class IconClockDollar extends Icon {
    public static function getName(): string {
        return 'clock-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.866 10.45a9 9 0 1 0 -7.815 10.488" />   <path d="M12 7v5l1.5 1.5" />   <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M19 21v1m0 -8v1" />
        SVG;
    }
}