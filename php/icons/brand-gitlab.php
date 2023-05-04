<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandGitlab extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-gitlab';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 14l-9 7l-9 -7l3 -11l3 7h6l3 -7z" />
        SVG;
    }
}