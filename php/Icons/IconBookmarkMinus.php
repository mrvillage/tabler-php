<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBookmarkMinus extends \Tabler\Icon {
    public static function getName(): string {
        return 'bookmark-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.427 17.256l-.427 -.256l-5 3v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v9" />   <path d="M16 19h6" />
        SVG;
    }
}