<?php
require_once(__DIR__ . '/../Icon.php');

class IconSword extends Icon {
    public static function getName(): string {
        return 'sword';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 4v5l-9 7l-4 4l-3 -3l4 -4l7 -9z" />   <path d="M6.5 11.5l6 6" />
        SVG;
    }
}