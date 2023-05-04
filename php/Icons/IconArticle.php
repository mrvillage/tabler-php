<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArticle extends \Tabler\Icon {
    public static function getName(): string {
        return 'article';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M7 8h10" />   <path d="M7 12h10" />   <path d="M7 16h10" />
        SVG;
    }
}