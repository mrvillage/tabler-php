<?php
require_once(__DIR__ . '/../Icon.php');

class IconSeparatorHorizontal extends Icon {
    public static function getName(): string {
        return 'separator-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12l16 0" />   <path d="M8 8l4 -4l4 4" />   <path d="M16 16l-4 4l-4 -4" />
        SVG;
    }
}