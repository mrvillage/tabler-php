<?php
require_once('../Icon.php');

class IconDualScreen extends Icon {
    public static function getName(): string {
        return 'dual-screen';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 4l8 3v15l-8 -3z" />   <path d="M13 19h6v-15h-14" />
        SVG;
    }
}