<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBookmarkPlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'bookmark-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.357 17.214l-.357 -.214l-5 3v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v6.5" />   <path d="M16 19h6" />   <path d="M19 16v6" />
        SVG;
    }
}