<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowsSplit extends Icon {
    public static function getName(): string {
        return 'arrows-split';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 17h-8l-3.5 -5h-6.5" />   <path d="M21 7h-8l-3.495 5" />   <path d="M18 10l3 -3l-3 -3" />   <path d="M18 20l3 -3l-3 -3" />
        SVG;
    }
}