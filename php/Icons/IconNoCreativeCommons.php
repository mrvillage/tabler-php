<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNoCreativeCommons extends \Tabler\Icon {
    public static function getName(): string {
        return 'no-creative-commons';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M10.5 10.5c-.847 -.71 -2.132 -.658 -2.914 .116a1.928 1.928 0 0 0 0 2.768c.782 .774 2.067 .825 2.914 .116" />   <path d="M16.5 10.5c-.847 -.71 -2.132 -.658 -2.914 .116a1.928 1.928 0 0 0 0 2.768c.782 .774 2.067 .825 2.914 .116" />   <path d="M6 6l1.5 1.5" />   <path d="M16.5 16.5l1.5 1.5" />
        SVG;
    }
}