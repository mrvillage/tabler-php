<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandTwilio extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-twilio';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 12a9 9 0 1 1 -18 0a9 9 0 0 1 18 0z" />   <path d="M9 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M15 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M15 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M9 15m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
        SVG;
    }
}