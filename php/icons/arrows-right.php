<?php
require_once('../Icon.php');

class IconArrowsRight extends Icon {
    public static function getName(): string {
        return 'arrows-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 17l-18 0" />   <path d="M18 4l3 3l-3 3" />   <path d="M18 20l3 -3l-3 -3" />   <path d="M21 7l-18 0" />
        SVG;
    }
}