<?php
return [
    'configuration' => 'API Configuratie',
    'token' => 'API Token',
    'name' => 'API Naam',
    'new' => 'Nieuwe API',
    'edit' => 'API aanpassen',
    'ipAllowed' => 'IP adres toestaan (gescheiden door komma\'s)',
    'ipAllowedDescription' => 'Laat leeg om alle IP\'s toe te staan, of gebruik dit als voorbeeld: 127.0.0.1, 127.0.0.*, 201.127.*.*',
    'generateToken' => 'Genereer nieuwe API token',
    'permissions' => 'API rechten',
    'successCreation' => 'API is successvol aangemaakt.',
    'successUpdate' => 'API is successvol geüpdated.',
    'removeConfirm' => 'Zeker weten dat je deze API wilt verwijderen?',
    'apiRemoved' => 'API is verwijderd.',
    'userCreated' => 'Gebruikersnaam is aangemaakt.',
    'emailChanged' => 'Email is aangepast.',
    'userRemoved' => 'Gebruikersaccount is verwijderd.',
    'departmentCreated' => 'Afdeling is aangemaakt.',
    'departmentUpdated' => 'Afdeling is gewijzigd.',
    'departmentRemoved' => 'Afdeling en tickets zijn verwijderd.',
    'ticketCreated' => 'Ticket is aangemaakt.',
    'ticketUpdated' => 'Ticket is gewijzigd.',
    'ticketRemoved' => 'Ticket is verwijderd.',
    'messageCreated' => 'Bericht is aangemaakt en gekoppeld aan ticket.',
    'attachmentRemoved' => 'Bestand is verwijderd van de servers.',
    'accountLoggedIn' => 'Je bent ingelogd.',
    'error' => [
        'apiName' => 'Vul je API naam in.',
        'invalidStatus' => 'API status is niet geldig.',
        'invalidID' => 'API ID is niet geldig',
        'authentication' => 'Authenticatie is niet geldig.',
        'ipAllowed' => 'IP adres `%ip% is niet toegestaan.',
        'noAllowed' => 'Rechten niet toegestaan:',
        'fullNameMissing' => 'Volledige naam ontbreekt.',
        'emailMissing' => 'Email adres ontbreekt.',
        'emailNotValid' => 'Email adres is niet geldig.',
        'emailTaken' => 'Email adres is al in gebruik.',
        'userNotFound' => 'Gebruiker niet gevonden.',
        'pageNotFound' => 'Pagina niet gevonden.',
        'departmentMissing' => 'Afdeling ontbreekt.',
        'departmentTypeMissing' => 'Afdelingstype ontbreekt.',
        'departmentType' => 'Afdelingstype moet 0 of 1 zijn',
        'departmentNotFound' => 'Afdeling niet gevonden',
        'openerMissing' => 'Opener ontbreekt.',
        'openerInvalid' => 'Opener is niet geldig.',
        'userIdMissing' => 'Geruiker ID ontbreekt.',
        'userIdNotValid' => 'Gebruiker ID is niet geldig.',
        'userIdNotFound' => 'Gebruiker ID niet gevonden.',
        'staffIdMissing' => 'Personeel ID ontbreekt.',
        'staffIdNotValid' => 'Personeel ID is niet geldig.',
        'staffIdNotFound' => 'Personeel ID niet gevonden.',
        'departmentIdMissing' => 'Afdeling ID ontbreekt.',
        'departmentIdNotValid' => 'Afdeling ID is niet geldig.',
        'departmentIdNotFound' => 'Afdeling ID niet gevonden.',
        'subjectMissing' => 'Onderwerp ontbreekt.',
        'bodyMissing' => 'Inhoud ontbreekt.',
        'fileNotAllowed' => 'Bestandstype is niet toegestaan.',
        'fileIsBig' => 'Bestandstype is te groot. Maximum formaat is %size%.',
        'statusIdNotValid' => 'Status ID is niet geldig.',
        'ticketNotFound' => 'Ticket niet gevonden.',
        'ticketIdMissing' => 'Ticket ID ontbreekt.',
        'messageMissing' => 'Bericht ontbreekt.',
        'replierMissing' => 'Antwoorder ontbreekt.',
        'replierNotValid' => 'Antwoorder is niet geldig.',
        'attachmentNotFound' => 'Bijlage niet gevonden.',
        'usernameMissing' => 'Gebruikersnaam ontbreekt.',
        'usernameNotValid' => 'Gebruikersnaam is niet geldig.',
        'passwordMissing' => 'Wachtwoord ontbreekt.',
        'ipMissing' => 'IP adres ontbreekt.',
        'ipNotValid' => 'IP adres is niet geldig.',
        'accountLocked' => 'Account vergrendeld voor %n% minuten.',
        'attemptCount' => '(Poging %1% van %2%)',
        'invalidUsernamePassword' => 'Gebruikersnaam of wachtwoord is niet geldig.',
        'accountNotActive' => 'Account is locked.',
        'twoFactorMissing' => 'Tweefactor code ontbreekt.',
        'twoFactorNotValid' => 'Tweefactor authenticatie mislukt.'
    ],
    'permissionsList' => [
        'users' => 'Gebruikers',
        'users_create' => 'Maak gebruikers.',
        'users_read' => 'Verkrijg lijst/details van gebruikers.',
        'users_update' => 'Gebruikers aanpassen.',
        'users_delete' => 'Verwijder gebruikers.',
        'departments' => 'Afdelingen',
        'departments_create' => 'Maak afdelingen.',
        'departments_read' => 'Verkrijg lijst/details van afdelingen.',
        'departments_update' => 'Afdelingen aanpassen.',
        'departments_delete' => 'Afdelingen verwijderen.',
        'tickets' => 'Ondersteunings tickets',
        'tickets_create' => 'Tickets aanmaken.',
        'tickets_read' => 'Verkrijg lijst/details van tickets.',
        'tickets_update' => 'Ticket status ofafdeling aanpassen.',
        'tickets_delete' => 'Tickets verwijderen.',
        'messages' => 'Ticket berichten',
        'messages_create' => 'Berichten aan ticket toevoegen.',
        'messages_read' => 'Berichten van tickets inzien.',
        'attachments' => 'Bijlagen',
        'attachments_read' => 'Verkrijg lijst/details van bijlagen.',
        'attachments_download' => 'Bijlagen downloaden.',
        'attachments_delete' => 'Bijlagen verwijderen.',
        'staff' => 'Personeel',
        'staff_read' => 'Verkrijg lijst/details van personeel',
        'staff_auth' => 'Valideer inloggegevens personeel'
    ]
];