<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowsDiff extends Icon {
    public static function getName(): string {
        return 'arrows-diff';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 16h10" />   <path d="M11 16l4 4" />   <path d="M11 16l4 -4" />   <path d="M13 8h-10" />   <path d="M13 8l-4 4" />   <path d="M13 8l-4 -4" />
        SVG;
    }
}