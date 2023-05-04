<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconProgress extends \Tabler\Icon {
    public static function getName(): string {
        return 'progress';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 20.777a8.942 8.942 0 0 1 -2.48 -.969" />   <path d="M14 3.223a9.003 9.003 0 0 1 0 17.554" />   <path d="M4.579 17.093a8.961 8.961 0 0 1 -1.227 -2.592" />   <path d="M3.124 10.5c.16 -.95 .468 -1.85 .9 -2.675l.169 -.305" />   <path d="M6.907 4.579a8.954 8.954 0 0 1 3.093 -1.356" />
        SVG;
    }
}