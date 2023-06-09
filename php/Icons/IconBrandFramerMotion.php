<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandFramerMotion extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-framer-motion';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12l-8 -8v16l16 -16v16l-4 -4" />   <path d="M20 12l-8 8l-4 -4" />
        SVG;
    }
}