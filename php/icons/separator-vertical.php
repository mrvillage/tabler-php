<?php
require_once(__DIR__ . '/../Icon.php');

class IconSeparatorVertical extends Icon {
    public static function getName(): string {
        return 'separator-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4l0 16" />   <path d="M8 8l-4 4l4 4" />   <path d="M16 16l4 -4l-4 -4" />
        SVG;
    }
}