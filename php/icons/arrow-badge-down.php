<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBadgeDown extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-badge-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 13v-6l-5 4l-5 -4v6l5 4z" />
        SVG;
    }
}