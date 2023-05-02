<?php
require_once(__DIR__ . '../Icon.php');

class IconMailOpened extends Icon {
    public static function getName(): string {
        return 'mail-opened';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />   <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />   <path d="M3 19l6 -6" />   <path d="M15 13l6 6" />
        SVG;
    }
}