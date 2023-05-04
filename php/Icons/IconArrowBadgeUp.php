<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBadgeUp extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-badge-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 11v6l-5 -4l-5 4v-6l5 -4z" />
        SVG;
    }
}