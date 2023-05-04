<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCross extends Tabler\Icon {
    public static function getName(): string {
        return 'cross';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 21h4v-9h5v-4h-5v-5h-4v5h-5v4h5z" />
        SVG;
    }
}