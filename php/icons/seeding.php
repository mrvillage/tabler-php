<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSeeding extends \Tabler\Icon {
    public static function getName(): string {
        return 'seeding';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10a6 6 0 0 0 -6 -6h-3v2a6 6 0 0 0 6 6h3" />   <path d="M12 14a6 6 0 0 1 6 -6h3v1a6 6 0 0 1 -6 6h-3" />   <path d="M12 20l0 -10" />
        SVG;
    }
}