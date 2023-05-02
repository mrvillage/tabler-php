<?php
require_once('../Icon.php');

class IconArrowBarToLeft extends Icon {
    public static function getName(): string {
        return 'arrow-bar-to-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 12l10 0" />   <path d="M10 12l4 4" />   <path d="M10 12l4 -4" />   <path d="M4 4l0 16" />
        SVG;
    }
}