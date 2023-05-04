<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandLinktree extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-linktree';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 3l-7 12h3v5h5v-5h-2l4 -7z" />   <path d="M15 3l7 12h-3v5h-5v-5h2l-4 -7z" />
        SVG;
    }
}