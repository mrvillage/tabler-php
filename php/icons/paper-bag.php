<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPaperBag extends Icon {
    public static function getName(): string {
        return 'paper-bag';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 3h8a2 2 0 0 1 2 2v1.82a5 5 0 0 0 .528 2.236l.944 1.888a5 5 0 0 1 .528 2.236v5.82a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-5.82a5 5 0 0 1 .528 -2.236l1.472 -2.944v-3a2 2 0 0 1 2 -2z" />   <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 21a2 2 0 0 0 2 -2v-5.82a5 5 0 0 0 -.528 -2.236l-1.472 -2.944" />   <path d="M11 7h2" />
        SVG;
    }
}