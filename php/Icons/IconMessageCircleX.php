<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessageCircleX extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-circle-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.593 19.855a9.96 9.96 0 0 1 -5.893 -.855l-4.7 1l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c2.128 1.816 3.053 4.363 2.693 6.813" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}