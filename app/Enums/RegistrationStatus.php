<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

final class RegistrationStatus extends Enum
{
    #[Description('Pagamento pendente')]
    const PendingPayment = 'pending_payment';

    #[Description('Em análise')]
    const UnderAnalysis = 'under_analysis';

    #[Description('Aprovada')]
    const Approved = 'approved';

    #[Description('Recusada')]
    const Refused = 'refused';
}
