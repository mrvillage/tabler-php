<?php
require_once(__DIR__ . '../Icon.php');

class IconJewishStar extends Icon {
    public static function getName(): string {
        return 'jewish-star';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 2l3 5h6l-3 5l3 5h-6l-3 5l-3 -5h-6l3 -5l-3 -5h6z" />
        SVG;
    }
}