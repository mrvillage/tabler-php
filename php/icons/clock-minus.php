<?php
require_once(__DIR__ . '../Icon.php');

class IconClockMinus extends Icon {
    public static function getName(): string {
        return 'clock-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20.477 15.022a9 9 0 1 0 -7.998 5.965" />   <path d="M12 7v5l3 3" />   <path d="M16 19h6" />
        SVG;
    }
}