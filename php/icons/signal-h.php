<?php
require_once('../Icon.php');

class IconSignalH extends Icon {
    public static function getName(): string {
        return 'signal-h';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 16v-8" />   <path d="M14 8v8" />   <path d="M10 12h4" />
        SVG;
    }
}