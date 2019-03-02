<?php

/**
 * Copyright Shopgate Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    Shopgate Inc, 804 Congress Ave, Austin, Texas 78701 <interfaces@shopgate.com>
 * @copyright Shopgate Inc
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

class Shopgate_Cloudapi_Model_Resource_Order_Source extends Mage_Core_Model_Mysql4_Abstract
{
    const COLUMN_ORDER_ID = 'order_id';
    const COLUMN_SOURCE   = 'source';
    const COLUMN_AGENT    = 'user_agent';

    /**
     * Initialize configuration data
     */
    protected function _construct()
    {
        $this->_init('shopgate_cloudapi/order_source', 'entity_id');
    }
}
