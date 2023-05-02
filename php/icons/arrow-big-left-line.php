<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowBigLeftLine extends Icon {
    public static function getName(): string {
        return 'arrow-big-left-line';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 15v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h6v6h-6z" />   <path d="M21 15v-6" />
        SVG;
    }
}