<?php
require_once(__DIR__ . '/../Icon.php');

class IconStackPush extends Icon {
    public static function getName(): string {
        return 'stack-push';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 10l-2 1l8 4l8 -4l-2 -1" />   <path d="M4 15l8 4l8 -4" />   <path d="M12 4v7" />   <path d="M15 8l-3 3l-3 -3" />
        SVG;
    }
}