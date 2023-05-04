<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronLeft extends Tabler\Icon {
    public static function getName(): string {
        return 'chevron-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 6l-6 6l6 6" />
        SVG;
    }
}