<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class OrderreturnsPartialRefund extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Model
{
  /**
   * @var Price
   */
  public $priceAmount;
  protected $priceAmountType = Price::class;
  protected $priceAmountDataType = '';
  /**
   * @var Price
   */
  public $taxAmount;
  protected $taxAmountType = Price::class;
  protected $taxAmountDataType = '';

  /**
   * @param Price
   */
  public function setPriceAmount(Price $priceAmount)
  {
    $this->priceAmount = $priceAmount;
  }
  /**
   * @return Price
   */
  public function getPriceAmount()
  {
    return $this->priceAmount;
  }
  /**
   * @param Price
   */
  public function setTaxAmount(Price $taxAmount)
  {
    $this->taxAmount = $taxAmount;
  }
  /**
   * @return Price
   */
  public function getTaxAmount()
  {
    return $this->taxAmount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrderreturnsPartialRefund::class, 'Google_Service_ShoppingContent_OrderreturnsPartialRefund');
