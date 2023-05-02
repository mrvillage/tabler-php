<?php
require_once(__DIR__ . '../Icon.php');

class IconBook extends Icon {
    public static function getName(): string {
        return 'book';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />   <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />   <path d="M3 6l0 13" />   <path d="M12 6l0 13" />   <path d="M21 6l0 13" />
        SVG;
    }
}