<?php


declare(strict_types=1);

namespace PyzTest\Zed\Payment\Presentation;

use Generated\Shared\Transfer\PaymentConfirmedTransfer;
use PyzTest\Zed\Payment\PaymentTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group Payment
 * @group Presentation
 * @group PaymentConfirmedMessageCest
 * Add your own group annotations below this line
 */
class PaymentConfirmedMessageCest
{
    /**
     * @var string
     */
    protected const INITIAL_ITEM_STATE = 'payment confirmation pending';

    /**
     * @var string
     */
    public const FINAL_ITEM_STATE = 'payment confirmed';

    /**
     * @param \PyzTest\Zed\Payment\PaymentTester $I
     *
     * @return void
     */
    public function testPaymentConfirmedMessageIsSuccessfullyHandled(PaymentTester $I): void
    {
        // Arrange
        $salesOrderEntity = $I->haveSalesOrder(static::INITIAL_ITEM_STATE);
        $paymentConfirmedTransfer = $I->havePaymentMessageTransfer(
            PaymentConfirmedTransfer::class,
            $salesOrderEntity,
        );

        // Act
        $I->handlePaymentMessageTransfer($paymentConfirmedTransfer);

        // Assert
        $I->assertOrderHasCorrectState($salesOrderEntity, static::FINAL_ITEM_STATE);
    }
}
