<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChevronUp extends Tabler\Icon {
    public static function getName(): string {
        return 'chevron-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 15l6 -6l6 6" />
        SVG;
    }
}