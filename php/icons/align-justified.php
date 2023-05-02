<?php
require_once(__DIR__ . '../Icon.php');

class IconAlignJustified extends Icon {
    public static function getName(): string {
        return 'align-justified';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6l16 0" />   <path d="M4 12l16 0" />   <path d="M4 18l12 0" />
        SVG;
    }
}