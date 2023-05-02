<?php
require_once(__DIR__ . '/../Icon.php');

class IconBrandTelegram extends Icon {
    public static function getName(): string {
        return 'brand-telegram';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
        SVG;
    }
}