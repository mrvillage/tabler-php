<?php
require_once(__DIR__ . '../Icon.php');

class IconVinyl extends Icon {
    public static function getName(): string {
        return 'vinyl';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 3.937a9 9 0 1 0 5 8.063" />   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M20 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M20 4l-3.5 10l-2.5 2" />
        SVG;
    }
}