<?php declare(strict_types=1);
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Twig\Escaper;

use Twig\Environment;

/**
 * Class DecEntityEscaper
 *
 * @author Tomasz Kowalewski (t.kowalewski@createit.pl)
 */
class DecEntityEscaper implements EscaperInterface
{
    /**
     * @return string
     */
    public function getStrategy(): string
    {
        return 'decentity';
    }

    /**
     * @param Environment $environment
     * @param string      $string
     * @param string      $charset
     *
     * @return string
     */
    public function escape(Environment $environment, $string, $charset): string
    {
        $return = '';

        for ($i = 0; $i < strlen($string); $i++) {
            $return .= '&#' . ord($string[$i]) . ';';
        }

        return $return;
    }
}
