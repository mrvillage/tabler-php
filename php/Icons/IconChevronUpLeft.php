<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronUpLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'chevron-up-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 16v-8h8" />
        SVG;
    }
}