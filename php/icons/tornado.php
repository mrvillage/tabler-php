<?php
require_once(__DIR__ . '../Icon.php');

class IconTornado extends Icon {
    public static function getName(): string {
        return 'tornado';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 4l-18 0" />   <path d="M13 16l-6 0" />   <path d="M11 20l4 0" />   <path d="M6 8l14 0" />   <path d="M4 12l12 0" />
        SVG;
    }
}