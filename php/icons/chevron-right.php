<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronRight extends Icon {
    public static function getName(): string {
        return 'chevron-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 6l6 6l-6 6" />
        SVG;
    }
}