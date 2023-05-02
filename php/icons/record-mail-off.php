<?php
require_once(__DIR__ . '/../Icon.php');

class IconRecordMailOff extends Icon {
    public static function getName(): string {
        return 'record-mail-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M18.569 14.557a3 3 0 1 0 -4.113 -4.149" />   <path d="M7 15h8" />   <path d="M3 3l18 18" />
        SVG;
    }
}