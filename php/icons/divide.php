<?php
require_once('../Icon.php');

class IconDivide extends Icon {
    public static function getName(): string {
        return 'divide';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <circle cx="12" cy="6" r="1" fill="currentColor" />   <circle cx="12" cy="18" r="1" fill="currentColor" />   <path d="M5 12l14 0" />
        SVG;
    }
}