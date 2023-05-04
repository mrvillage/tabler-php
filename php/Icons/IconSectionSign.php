<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSectionSign extends \Tabler\Icon {
    public static function getName(): string {
        return 'section-sign';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.172 19a3 3 0 1 0 2.828 -4" />   <path d="M14.83 5a3 3 0 1 0 -2.83 4" />   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}