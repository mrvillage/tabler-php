<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconComponents extends Icon {
    public static function getName(): string {
        return 'components';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12l3 3l3 -3l-3 -3z" />   <path d="M15 12l3 3l3 -3l-3 -3z" />   <path d="M9 6l3 3l3 -3l-3 -3z" />   <path d="M9 18l3 3l3 -3l-3 -3z" />
        SVG;
    }
}