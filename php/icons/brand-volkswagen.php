<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandVolkswagen extends Icon {
    public static function getName(): string {
        return 'brand-volkswagen';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 21a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9a9 9 0 0 0 -9 9a9 9 0 0 0 9 9z" />   <path d="M5 7l4.5 11l1.5 -5h2l1.5 5l4.5 -11" />   <path d="M9 4l2 6h2l2 -6" />
        SVG;
    }
}