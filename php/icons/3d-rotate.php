<?php
require_once(__DIR__ . '../Icon.php');

class Icon3dRotate extends Icon {
    public static function getName(): string {
        return '3d-rotate';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a7 7 0 0 1 7 7v4l-3 -3" />   <path d="M22 11l-3 3" />   <path d="M8 15.5l-5 -3l5 -3l5 3v5.5l-5 3z" />   <path d="M3 12.5v5.5l5 3" />   <path d="M8 15.545l5 -3.03" />
        SVG;
    }
}