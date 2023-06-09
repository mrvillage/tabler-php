<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronDownLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'chevron-down-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8v8h8" />
        SVG;
    }
}