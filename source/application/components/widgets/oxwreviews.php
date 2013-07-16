<?php

/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   views
 * @copyright (C) OXID eSales AG 2003-2013
 * @version OXID eShop CE
 */

/**
 * Product reviews widget
 */
class oxwReviews extends oxWidget
{
    /**
     * Names of components (classes) that are initiated and executed
     * before any other regular operation.
     * User component used in template.
     * @var array
     */
    protected $_aComponentNames = array( 'oxcmp_user' => 1 );

    /**
     * Current class template name.
     * @var string
     */
    protected $_sThisTemplate = 'widget/reviews/reviews.tpl';

    /**
     * Template variable getter. Returns review user id
     *
     * @return string
     */
    public function getReviewUserHash()
    {
        return $this->getViewParameter( 'reviewuserhash' );
    }

    /**
     * Template variable getter. Returns active object's reviews
     *
     * @return array
     */
    public function getReviews()
    {
        /** @var Review $oReview */
        $oReview = oxNew( 'Review' );
        return $oReview->getReviews();
    }

    public function saveReview()
    {
        /** @var Review $oReview */
        $oReview = oxNew( 'Review' );
        $oReview->saveReview();
    }

    public function canRate()
    {
        /** @var Review $oReview */
        $oReview = oxNew( 'Review' );
        return $oReview->canRate();
    }

    public function getActiveRecommList()
    {
        /** @var Review $oReview */
        $oReview = oxNew( 'Review' );
        return $oReview->getActiveRecommList();
    }

    public function getProduct()
    {
        /** @var Review $oReview */
        $oReview = oxNew( 'Review' );
        return $oReview->getProduct();
    }
}
