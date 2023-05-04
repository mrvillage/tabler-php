<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowNarrowLeft extends Icon {
    public static function getName(): string {
        return 'arrow-narrow-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12l14 0" />   <path d="M5 12l4 4" />   <path d="M5 12l4 -4" />
        SVG;
    }
}