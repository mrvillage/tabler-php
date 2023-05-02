<?php
require_once(__DIR__ . '../Icon.php');

class IconCurrency extends Icon {
    public static function getName(): string {
        return 'currency';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />   <path d="M4 4l3 3" />   <path d="M20 4l-3 3" />   <path d="M4 20l3 -3" />   <path d="M20 20l-3 -3" />
        SVG;
    }
}