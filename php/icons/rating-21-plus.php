<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRating21Plus extends Tabler\Icon {
    public static function getName(): string {
        return 'rating-21-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M13 15v-6" />   <path d="M15.5 12h3" />   <path d="M17 10.5v3" />   <path d="M7 10.5a1.5 1.5 0 0 1 3 0c0 .443 -.313 .989 -.612 1.393l-2.388 3.107h3" />
        SVG;
    }
}