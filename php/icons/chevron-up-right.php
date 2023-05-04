<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronUpRight extends Tabler\Icon {
    public static function getName(): string {
        return 'chevron-up-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8h8v8" />
        SVG;
    }
}