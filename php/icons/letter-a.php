<?php
require_once(__DIR__ . '../Icon.php');

class IconLetterA extends Icon {
    public static function getName(): string {
        return 'letter-a';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 20v-12a4 4 0 0 1 4 -4h2a4 4 0 0 1 4 4v12" />   <path d="M7 13l10 0" />
        SVG;
    }
}