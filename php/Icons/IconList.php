<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconList extends \Tabler\Icon {
    public static function getName(): string {
        return 'list';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 6l11 0" />   <path d="M9 12l11 0" />   <path d="M9 18l11 0" />   <path d="M5 6l0 .01" />   <path d="M5 12l0 .01" />   <path d="M5 18l0 .01" />
        SVG;
    }
}