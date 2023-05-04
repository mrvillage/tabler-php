<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlignRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'align-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6l16 0" />   <path d="M10 12l10 0" />   <path d="M6 18l14 0" />
        SVG;
    }
}