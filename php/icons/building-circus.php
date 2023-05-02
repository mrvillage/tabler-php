<?php
require_once(__DIR__ . '../Icon.php');

class IconBuildingCircus extends Icon {
    public static function getName(): string {
        return 'building-circus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 11h16" />   <path d="M12 6.5c0 1 -5 4.5 -8 4.5" />   <path d="M12 6.5c0 1 5 4.5 8 4.5" />   <path d="M6 11c-.333 5.333 -1 8.667 -2 10h4c1 0 4 -4 4 -9v-1" />   <path d="M18 11c.333 5.333 1 8.667 2 10h-4c-1 0 -4 -4 -4 -9v-1" />   <path d="M12 7v-4l2 1h-2" />
        SVG;
    }
}