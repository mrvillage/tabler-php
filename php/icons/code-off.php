<?php
require_once(__DIR__ . '../Icon.php');

class IconCodeOff extends Icon {
    public static function getName(): string {
        return 'code-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 8l-4 4l4 4" />   <path d="M17 8l4 4l-2.5 2.5" />   <path d="M14 4l-1.201 4.805m-.802 3.207l-2 7.988" />   <path d="M3 3l18 18" />
        SVG;
    }
}