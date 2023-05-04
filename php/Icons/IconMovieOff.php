<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMovieOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'movie-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h10a2 2 0 0 1 2 2v10m-.592 3.42c-.362 .359 -.859 .58 -1.408 .58h-12a2 2 0 0 1 -2 -2v-12c0 -.539 .213 -1.028 .56 -1.388" />   <path d="M8 8v12" />   <path d="M16 4v8m0 4v4" />   <path d="M4 8h4" />   <path d="M4 16h4" />   <path d="M4 12h8m4 0h4" />   <path d="M16 8h4" />   <path d="M3 3l18 18" />
        SVG;
    }
}