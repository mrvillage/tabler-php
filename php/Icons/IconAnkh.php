<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAnkh extends \Tabler\Icon {
    public static function getName(): string {
        return 'ankh';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 13h12" />   <path d="M12 21v-8l-.422 -.211a6.472 6.472 0 0 1 -3.578 -5.789a4 4 0 1 1 8 0a6.472 6.472 0 0 1 -3.578 5.789l-.422 .211" />
        SVG;
    }
}