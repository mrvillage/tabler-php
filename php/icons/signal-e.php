<?php
require_once(__DIR__ . '../Icon.php');

class IconSignalE extends Icon {
    public static function getName(): string {
        return 'signal-e';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 8h-4v8h4" />   <path d="M10 12h2.5" />
        SVG;
    }
}