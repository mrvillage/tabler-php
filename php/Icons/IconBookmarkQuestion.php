<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBookmarkQuestion extends \Tabler\Icon {
    public static function getName(): string {
        return 'bookmark-question';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.006 18.804l-3.006 -1.804l-5 3v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v5.5" />   <path d="M19 22v.01" />   <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
        SVG;
    }
}