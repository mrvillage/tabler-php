<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowRight extends Icon {
    public static function getName(): string {
        return 'arrow-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12l14 0" />   <path d="M13 18l6 -6" />   <path d="M13 6l6 6" />
        SVG;
    }
}