<?php
require_once(__DIR__ . '../Icon.php');

class IconTimeline extends Icon {
    public static function getName(): string {
        return 'timeline';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 16l6 -7l5 5l5 -6" />   <path d="M15 14m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M10 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M4 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M20 8m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}