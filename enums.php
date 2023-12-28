<?php
//% Creazione enum

//, Sintassi base
/* enum Weekday {
    case Monday;
    case Tuesday;
    case Wednesday;
    case Thursday;
    case Friday;
    case Saturday;
    case Sunday;
}
function printGreeting(Weekday $day): void {
    if ($day === Weekday::Saturday || $day === Weekday::Sunday) {
        echo "É arrivato il weekend!";
    } else {
        echo "Buona giornata e buon lavoro!";
    }
}
printGreeting(Weekday::Monday); // Buona giornata e buon lavoro!
echo '<br>';
printGreeting(Weekday::Saturday); // É arrivato il weekend! */

//var_dump(Weekday::Friday);


//, Backed Enums
/* enum Status: string {
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';

    public function label(): string {
        return match($this) {
            self::PENDING => 'In attesa di approvazione',
            self::APPROVED => 'Approvato',
            self::REJECTED => 'Rifiutato',
        };
    }
}

$status = Status::APPROVED;
echo $status->label(), '<br>'; // Approvato
echo Status::PENDING->value, '<br>'; // pending
echo Status::REJECTED->name, '<br>'; // REJECTED
var_dump(Status::cases()); // Array enums

foreach (Status::cases() as $case) {
    echo $case->name, ': ', $case->value, '<br>';
} */ //PENDING: pending, APPROVED: approved, REJECTED: rejected

//# Modificare i valori degli enum
//Status::APPROVED->value = 'Unknown'; // Errore


//# from() e tryFrom()
/*
//* Utilizzo di from()
$statusApproved = Status::from('approved');
echo $statusApproved->label(), '<br>'; // Approvato

//* Utilizzo di tryFrom()
$statusUnknown = Status::tryFrom('unknown'); // Non esiste, quindi ritorna null
if ($statusUnknown === null) {
    echo "Status non trovato", '<br>'; // Status non trovato
}

//* Esempio di gestione di un valore non valido con from()
try {
    $invalidStatus = Status::from('invalid'); //! Scatena un'eccezione ValueError
} catch (ValueError $e) {
    echo "Errore: ", $e->getMessage(), '<br>';
}

//* Esempio di gestione di un valore non valido con tryFrom()
$invalidStatus = Status::tryFrom('invalid'); // Ritorna null senza scatenare eccezioni
if ($invalidStatus === null) {
    echo "Status non valido.", '<br>';
} */


//, Metodi nelle enumerazioni
/* enum SuperHero: string {
    case Hero1 = 'Superman';
    case Hero2 = 'Batman';
    case Hero3 = 'Spider-Man';
    case Hero4 = 'Iron Man';

    public function shoutName(): string {
        return strtoupper($this->value);
    }

    public function isSuperman(): bool {
        return $this === self::Hero1 || $this === self::Hero2;
    }
}
echo SuperHero::Hero4->shoutName(); // IRON MAN
echo SuperHero::Hero1->isSuperman(); // True */
