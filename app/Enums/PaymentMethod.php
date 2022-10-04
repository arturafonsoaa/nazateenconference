<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

final class PaymentMethod extends Enum
{
    #[Description('PIX')]
    const PendingPayment = 'pix';

    #[Description('Dinheiro')]
    const UnderAnalysis = 'cash';

    #[Description('Voucher')]
    const Approved = 'free_voucher';

    #[Description('Cupom de Presente')]
    const Refused = 'gift_coupon';
}
