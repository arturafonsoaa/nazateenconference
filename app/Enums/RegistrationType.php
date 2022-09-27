<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Attributes\Description;
use BenSampo\Enum\Enum;

final class RegistrationType extends Enum
{
    #[Description('Participante')]
    const PendingPayment = 'participant';

    #[Description('Líder')]
    const UnderAnalysis = 'leader';
}
