<?php
require_once(__DIR__ . '../Icon.php');

class IconSignalHPlus extends Icon {
    public static function getName(): string {
        return 'signal-h-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 16v-8" />   <path d="M11 8v8" />   <path d="M7 12h4" />   <path d="M14 12h4" />   <path d="M16 10v4" />
        SVG;
    }
}