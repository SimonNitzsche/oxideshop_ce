<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2014
 * @version   OXID eShop CE
 */

/**
 * user list "view" class.
 * @package admin
 */
class List_User extends User_List
{
    /**
     * Viewable list size getter
     *
     * @return int
     */
    protected function _getViewListSize()
    {
        return $this->_getUserDefListSize();
    }

    /**
     * Sets SQL query parameters (such as sorting),
     * executes parent method parent::Init().
     *
     * @return null
     */
    public function init()
    {
        oxAdminList::init();
    }

    /**
     * Executes parent method parent::render(), passes data to Smarty engine
     * and returns name of template file "list_review.tpl".
     *
     * @return string
     */
    public function render()
    {
        parent::render();
        $this->_aViewData["menustructure"] = $this->getNavigation()->getDomXml()->documentElement->childNodes;
        return "list_user.tpl";
    }
}
