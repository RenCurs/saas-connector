<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Service\Insales\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Service\Insales\Model;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations\FakeMock as FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField as FakeMockField;

/**
 * Class Rule
 *
 * @package  SaaS\Service\Insales\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class Rule
{
    /**
     * @var int $id
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     *
     * @FakeMockField()
     */
    public $id;

    /**
     * @var float $orderPrice
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("order_price")
     *
     * @FakeMockField()
     */
    public $orderPrice;

    /**
     * @var float $price
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("price")
     *
     * @FakeMockField()
     */
    public $price;

    /**
     * @var float $orderWeight
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("order_weight")
     *
     * @FakeMockField()
     */
    public $orderWeight;
}