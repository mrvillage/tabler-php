<?php
require_once('../Icon.php');

class IconCheck extends Icon {
    public static function getName(): string {
        return 'check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12l5 5l10 -10" />
        SVG;
    }
}