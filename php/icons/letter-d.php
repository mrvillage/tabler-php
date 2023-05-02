<?php
require_once(__DIR__ . '/../Icon.php');

class IconLetterD extends Icon {
    public static function getName(): string {
        return 'letter-d';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 4h6a5 5 0 0 1 5 5v6a5 5 0 0 1 -5 5h-6v-16" />
        SVG;
    }
}