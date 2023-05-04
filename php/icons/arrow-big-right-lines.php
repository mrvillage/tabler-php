<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBigRightLines extends Icon {
    public static function getName(): string {
        return 'arrow-big-right-lines';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-3v-6h3z" />   <path d="M3 9v6" />   <path d="M6 9v6" />
        SVG;
    }
}