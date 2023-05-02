<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandFlutter extends Icon {
    public static function getName(): string {
        return 'brand-flutter';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 14l-3 -3l8 -8h6z" />   <path d="M14 21l-5 -5l5 -5h5l-5 5l5 5z" />
        SVG;
    }
}