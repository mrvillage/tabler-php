<?php
require_once(__DIR__ . '../Icon.php');

class IconChairDirector extends Icon {
    public static function getName(): string {
        return 'chair-director';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 21l12 -9" />   <path d="M6 12l12 9" />   <path d="M5 12h14" />   <path d="M6 3v9" />   <path d="M18 3v9" />   <path d="M6 8h12" />   <path d="M6 5h12" />
        SVG;
    }
}