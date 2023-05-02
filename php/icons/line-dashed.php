<?php
require_once('../Icon.php');

class IconLineDashed extends Icon {
    public static function getName(): string {
        return 'line-dashed';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12h2" />   <path d="M17 12h2" />   <path d="M11 12h2" />
        SVG;
    }
}