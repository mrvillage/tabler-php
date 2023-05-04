<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVocabularyOff extends Tabler\Icon {
    public static function getName(): string {
        return 'vocabulary-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3h3a2 2 0 0 1 2 2a2 2 0 0 1 2 -2h6a1 1 0 0 1 1 1v13m-2 2h-5a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2h-6a1 1 0 0 1 -1 -1v-14c0 -.279 .114 -.53 .298 -.712" />   <path d="M12 5v3m0 4v9" />   <path d="M7 11h1" />   <path d="M16 7h1" />   <path d="M16 11h1" />   <path d="M3 3l18 18" />
        SVG;
    }
}