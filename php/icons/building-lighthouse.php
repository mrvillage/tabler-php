<?php
require_once(__DIR__ . '../Icon.php');

class IconBuildingLighthouse extends Icon {
    public static function getName(): string {
        return 'building-lighthouse';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3l2 3l2 15h-8l2 -15z" />   <path d="M8 9l8 0" />   <path d="M3 11l2 -2l-2 -2" />   <path d="M21 11l-2 -2l2 -2" />
        SVG;
    }
}