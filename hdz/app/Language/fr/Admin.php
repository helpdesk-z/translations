<?php
return [
    'login' => [
        'title' => 'Connexion',
        'invalidUsernamePassword' => "Nom d'utilisateur ou mot de passe invalide.",
        'lockedMinutes' => 'Connexion bloquée %minutes% minutes',
        'attemptNumber' => '(Tentative : %attempt1% sur %attempt2%)',
        'accountLocked' => 'Compte verrouillé.',
        'rememberMe' => 'Se souvenir de moi',
        'button' => 'Connexion'
    ],
    'dashboard' => [
        'menu' => 'Dashboard'
    ],
    'tickets' => [
        'menu' => 'Tickets',
        'showingResults' => 'Afficher %x% à %y% sur %z%',
        'totalReplies' => '%number% réponses',
        'id' => 'Ticket ID',
        'removeConfirmation' => 'Voulez-vous vraiment supprimer ces tickets ?',
        'showOverdueOnly' => 'Afficher uniquement les tickets en retard',
        'active' => 'Actif',
        'attachmentRemoved' => 'Pièce jointe supprimée.',
        'messageSent' => 'Message envoyé.',
        'newTicket' => 'Nouveau ticket',
        'submitNewTicket' => 'Envoyer un nouveau ticket',
        'fullName' => "Facultatif. Si le ticket est envoyé à un client existant, vous ne pouvez saisir que l'email.",
        'departments' => 'Départements',
        'agentsAssigned' => 'Assigner un agent',
        'departmentsRemoveConfirmation' => 'Voulez-vous vraiment supprimer ce département et ses tickets ?',
        'departmentRemoved' => 'Le département et ses tickets ont été supprimés.',
        'departmentUpdated' => 'Département mis à jour.',
        'editDepartment' => 'Editer un département',
        'newDepartment' => 'Nouveau département',
        'departmentCreated' => 'Nouveau département créé.',

        'notes' => 'Notes',
        'notesRemoveConfirmation' => 'Voulez-vous vraiment supprimer cette note ?',
        'invalidRequest' => 'Requête invalide.',
        'noteRemoved' => 'Note supprimée.',
        'noteUpdated' => 'Note mise à jour.',
        'enterNote' => 'Saisissez votre note.',
        'notesSaved' => 'Votre note est ajoutée.',
        'addNote' => 'Ajouter une note'
    ],
    'account' => [
        'menu' => 'Compte',
        'online' => 'En ligne',
        'loginLog' => 'Connexion logs',
        'logout' => 'Déconnexion',
        'profile' => 'Profil',
        'changePassword' => 'Changer le mot de passe',
        'timezone' => 'Fuseau horaire',
        'timezoneDescription' => "Si vous n'en sélectionnez aucun, vous utiliserez le fuseau horaire par défaut du service d'assistance.",
        'passwordUpdated' => 'Mot de passe modifié.',
        'profileUpdated' => 'Profil mis à jour.',
        'avatarRemoved' => 'Avatar supprimé.'
    ],
    'cannedResponses' => [
        'menu' => 'Réponses automatiques',
        'removeConfirmation' => 'Voulez-vous vraiment supprimer ces réponses automatiques ?',
        'edit' => 'Editer les réponses automatiques',
        'new' => 'Nouvelles réponses automatiques'
    ],
    'kb' => [
        'menu' => 'FAQ',
        'articles' => 'Articles',
        'categories' => 'Catégories',
        'newCategory' => 'Nouvelle catégorie',
        'category' => 'Catégorie',
        'editCategory' => 'Editer catégorie',
        'addSubcategory' => 'Ajouter sous-catégorie',
        'newArticle' => 'Nouvel article',
        'removeCategory' => 'Supprimer catégorie',
        'removeConfirmation' => 'Voulez-vous vraiment supprimer cette catégorie et ses sous-catégories et articles ?',
        'categoryRemoved' => 'Catégorie supprimée.',
        'categoryCreated' => 'Nouvelle catégorie créée.',
        'categoryUpdated' => 'Catégorie mise à jour.',
        'article' => 'Article',
        'author' => 'Auteur',
        'editArticle' => "Editer l'article",
        'removeArticleConfirmation' => 'Voulez-vous vraiment supprimer cet article ?'
    ],
    'agents' => [
        'menu' => 'Agents',
        'agentRemoved' => 'Agent supprimé.',
        'registration' => 'Enregistré',
        'lastLogin' => 'Dernière connexion',
        'administrator' => 'Administrateur',
        'agent' => 'Agent',
        'edit' => 'Editer un agent',
        'new' => 'Nouvel agent',
        'informationUpdated' => "Informations de l'agent mis à jour.",
        'removeConfirmation' => 'Voulez-vous vraiment supprimer cet agent ?',
        'agentCreated' => 'Nouvel agent créé.',
        'assignedDepartments' => 'Départements assignés'
    ],
    'settings' => [
        'menu' => 'Paramètres',
        'general' => 'Général',
        'security' => 'Sécurité',
        'tickets' => 'Options des tickets',
        'kb' => 'Options FAQ',
        'emailAddresses' => 'E-mail',
        'emailTemplates' => 'Template des e-mails',
        'changeLogo' => 'Changement du logo',
        'logoRestored' => 'Logo par défaut restauré.',
        'logoChanged' => 'Logo changé.',
        'brandName' => 'Nom de la marque',
        'brandNameDescription' => "Le nom de la société sera utilisé pour marquer le centre d'assistance et les courriers électroniques sortants. Par exemple : HelpDeskZ Inc.",
        'windowTitle' => 'Titre de la fenêtre',
        'windowTitleDescription' => "Il s'agit du titre qui apparaît dans l'onglet du navigateur. Si votre page d'assistance est marquée d'un signet, il s'agira du titre de la page du site.",
        'pageSize' => 'Taille de la page par défaut',
        'pageSizeDescription' => 'Nombre de lignes par page.',
        'dateFormat' => 'Format de la date',
        'dateFormatDescription' => 'Définissez le format de la date pour les clients. [a]Voir doc PHP[/a]',
        'defaultTimezone' => 'Fuseau horaire',
        'defaultTimezoneDescription' => "Sélectionnez le fuseau horaire par défaut pour les nouveaux clients ou le personnel, ceci sera appliqué si le client ou le personnel n'en a pas sélectionné dans ses préférences.",
        'defaultServerTimezone' => 'Fuseau horaire par défaut du serveur',
        'maintenanceMode' => 'Mode maintenance',
        'maintenanceMessage' => 'Message',
        'recaptchaStatus' => 'reCAPTCHA statut',
        'siteKey' => 'Site key',
        'privateKey' => 'Private key',
        'maxLoginAttempts' => 'Nombre maximal de tentatives de connexion',
        'minutesIpLocking' => "Minutes de verrouillage de l'IP après avoir dépassé le nombre maximal de tentatives de connexion",
        'updated' => 'Paramètres mis à jour.',
        'displayOrderReplies' => "Ordre d'affichage des réponses aux tickets",
        'ticketsPerPage' => 'Tickets par page',
        'ticketsPerPageDescription' => 'Le nombre maximum de tickets à afficher avant de les répartir sur plusieurs pages.',
        'repliesPerPage' => 'Réponses par page',
        'repliesPerPageDescription' => 'Le nombre maximum de réponses aux tickets à afficher avant de les répartir sur plusieurs pages.',
        'defaultDeadline' => 'Délai de réponse par défaut',
        'defaultDeadlineDescription' => "Si l'agent ne répond pas dans ce délai, le ticket sera marqué comme étant en retard.",
        'defaultAutoClose' => 'Temps par défaut pour fermeture du ticket',
        'defaultAutoCloseDescription' => 'Si le client ne répond pas après ces heures, le ticket sera automatiquement fermé.',
        'allowAttachments' => 'Autoriser les pièces jointes',
        'numberAttachments' => 'Nombre de pièces jointes autorisées',
        'maxUploadSize' => "Taille maximale de l'envoi",
        'maxUploadSizeDescription' => 'Selon votre configuration PHP, elle ne peut pas être supérieure à %size%',
        'allowedFileTypes' => 'Types de fichiers autorisés',
        'allowedFileTypesDescription' => 'Saisissez les extensions de fichiers autorisées pour les pièces jointes, séparées par des virgules.',
        'newestReplyFirst' => 'Newest reply first',
        'oldestReplyFirst' => 'Oldest reply first',
        'articlesUnderCategory' => 'Articles à afficher sous une catégorie',
        'charLimitArticlePreview' => "Limite de caractères de l'aperçu de l'article",
        'charLimitArticlePreviewDescription' => "Le nombre maximum de caractères à afficher dans les aperçus d'articles.",
        'popularArticles' => "Nombre d'articles populaires à afficher",
        'newestArticles' => "Nombre d'articles les plus récents à afficher",
        'editEmailTemplate' => "Editer le modèle d'e-mail",
        'defaultEmailAddressDescription' => "L'e-mail par défaut est utilisé pour envoyer les notifications ou les messages des départements qui n'ont pas d'e-mail associé.",
        'newEmailAddress' => 'Nouvel e-mail',
        'emailDeletionConfirm' => 'Voulez-vous vraiment supprimer cet e-mail ?',
        'outgoing' => 'Sortie',
        'host' => 'Hôte',
        'port' => 'Port',
        'encryption' => 'Chiffrement',
        'incoming' => 'Entrant',
        'incomingInformation' => 'Le système supprimera tous les e-mails de la boîte aux lettres une fois téléchargés. Ceci est fait pour assurer les meilleures performances pour le traitement des e-mails côté serveur. Si vous souhaitez une sauvegarde des e-mails, nous vous recommandons de créer une nouvelle boîte aux lettres vers laquelle vous transférerez tous les e-mails entrants.',
        'editEmailAddress' => 'Editer e-mail',
        'emailTemplateUpdated' => 'Template e-mail mis à jour.',
        'defaultEmailChanged' => 'E-mail par défaut changé.',
        'emailRemoved' => 'E-mail supprimé.',
        'smtpHost' => 'SMTP Hôte',
        'smtpPort' => 'SMTP Port',
        'smtpEncryption' => 'Chiffrement SMTP',
        'incomingHost' => 'Hôte entrant',
        'incomingPort' => 'Port entrant',
        'incomingUsername' => "Nom d'utilisateur entrant",
        'incomingPassword' => 'Mot de passe entrant',
        'emailCreated' => 'Nouvel e-mail ajouté.',
        'emailUpdated' => 'E-mail mis à jour.',
    ],
    'tools' => [
        'menu' => 'Outils',
        'customFields' => 'Champs personnalisés',
        'fieldTitle' => 'Titre du champs',
        'fieldType' => 'Type de champs',
        'required' => 'Requis',
        'newCustomField' => 'Nouveau champs personnalisé',
        'editCustomField' => 'Editer champs personnalisé',
        'textField' => 'Champs texte',
        'textArea' => 'Zone texte',
        'checkbox' => 'Cas à cocher',
        'radio' => 'Radio',
        'dropdownSelect' => 'Menu déroulant',
        'date' => 'Date',
        'defaultValue' => 'Valeur par défaut',
        'options' => 'Options',
        'optionsDescription' => ' Saisissez une option par ligne. Chaque ligne sera un choix parmi lequel vos clients pourront choisir.',
        'select' => 'Sélectionner',
        'customFieldInserted' => 'Nouveau champs personnalisé créé.',
        'customFieldUpdated' => 'Champs personnalisé mis à jour.',
        'customFieldConfirm' => 'Voulez-vous vraiment supprimer ce champ personnalisé ?',
        'invalidCustomField' => 'Champs personnalisé invalide.',
        'customFieldRemoved' => 'Champs personnalisé supprimé.'
    ],
    'users' => [
        'menu' => 'Utilisateurs',
        'newUser' => 'Nouvel utilisateur',
        'editUser' => 'Editer utilisateur',
        'removeUserConfirmation' => 'Voulez-vous vraiment supprimer cet utilisateur et ses tickets ?',
        'userRemoved' => 'Utilisateur supprimé.',
        'notifyNewAccount' => "Envoyer un e-mail à l'utilisateur avec ses informations de compte",
        'accountCreated' => 'Compte utilisateur créé.',
        'accountUpdated' => 'Compte utisateur mis à jour.'
    ],
    'form' => [
        'username' => "Nom d'utilisateur",
        'password' => 'Mot de passe',
        'searchTicket' => 'Rechercher un ticket',
        'keyword' => 'mot clé',
        'dateOpened' => "Date d'ouverture",
        'lastUpdate' => 'Denrière mise à jour',
        'department' => 'Département',
        'allDepartments' => 'Tous les départements',
        'status' => 'Statut',
        'search' => 'Recherche',
        'open' => 'Ouvert',
        'answered' => 'Réponses',
        'awaiting_reply' => 'En attente',
        'in_progress' => 'En cours',
        'closed' => 'fermé',
        'overdue' => 'En retard',
        'todayAt' => "Aujourd'hui le %date%",
        'yesterdayAt' => 'Hier le %date%',
        'subject' => 'Sujet',
        'lastReply' => 'Dernière réponse',
        'priority' => 'Priorité',
        'massAction' => 'Action groupée',
        'noChange' => 'Aucun changement',
        'submit' => 'Envoyer',
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',
        'general' => 'Général',
        'reply' => 'Répondre',
        'createdOn' => 'Créé le %date%',
        'updatedOn' => 'Mis à jour le %date%',
        'save' => 'Enregistré',
        'to' => 'À',
        'quickInsert' => 'Insertion rapide',
        'attachments' => 'Pièces jointes',
        'allowedFiles' => 'Fichiers autorisés',
        'browse' => 'Parcourir',
        'chooseFile' => 'Choisir le fichier',
        'quote' => 'Citation',
        'staff' => 'Staff',
        'uploadImage' => 'Image envoyée',
        'total' => 'Total',
        'download' => 'Téléchargement',
        'dropImageHere' => "Glissez l'image ici pour la télécharger",
        'fullName' => 'Nom et prénom',
        'email' => 'E-mail',
        'dateCreated' => 'Date  de création',
        'createdBy' => 'Créé par',
        'title' => 'Titre',
        'message' => 'Message',
        'specialTags' => 'Étiquettes spéciales',
        'clientName' => 'Nom du client',
        'clientEmail' => 'E-mail du client',
        'goBack' => 'Retour',
        'type' => 'Type',
        'public' => 'Public',
        'private' => 'Privé',
        'action' => 'Action',
        'categoryName' => 'nom de la catégorie',
        'parentCategory' => 'Catégorie parent',
        'rootCategory' => 'Catégorie racine',
        'view' => 'Voir',
        'all' => 'Tout',
        'views' => 'Vues',
        'displayOrder' => "Ordre d'affichage",
        'beginningList' => 'Au début de la liste',
        'endList' => 'A la fin de la liste',
        'afterItem' => 'Après %item%',
        'notModify' => 'Ne pas modifier',
        'never' => 'Jamais',
        'active' => 'Actif',
        'locked' => 'Bloqué',
        'leaveBlankNotChange' => 'Laissez-le en blanc pour ne pas le modifier.',
        'yes' => 'Oui',
        'no' => 'Non',
        'enable' => 'Activer',
        'disable' => 'Désactiver',
        'default' => 'Par défaut',
        'setDefault' => 'Définir la valeur par défaut',
        'edit' => 'Editer',
        'emailName' => "Nom de l'e-mail",
        'none' => 'Aucun',
        'signature' => 'Signature',
        'newPassword' => 'Nouveau mot de passe',
        'existingPassword' => 'Mot de passe actuel',
        'confirm' => 'Confirmer',
        'enterExistingPassword' => 'Entrez votre mot de passe actuel.',
        'enterNewPassword' => 'Entrez votre nouveau mot de passe.',
        'manage' => 'Gérer',
        'avatar' => 'Avatar',
        'deleteAvatar' => "Supprimer l'avatar",
        'user' => 'Utilisateur',
    ],
    'error' => [
        'recordsNotFound' => 'Enregistrements non trouvés.',
        'noItemsSelected' => "Vous n'avez sélectionné aucun ticket.",
        'invalidCannedResponse' => 'Réponse automatique invalide.',
        'ticketNotFound' => 'Ticket non trouvé.',
        'ticketNotPermission' => "Vous n'avez pas les droits pour voir ce ticket.",
        'invalidDepartment' => 'Département invalide.',
        'invalidStatus' => 'Statut invalide.',
        'invalidPriority' => 'Priorité invalide.',
        'enterMessage' => 'Entrez votre message.',
        'enterValidEmail' => 'Entrez un e-mail valide.',
        'enterSubject' => 'Entrez un sujet.',
        'fileNotAllowed' => "Le fichier n'est pas autorisé.",
        'fileBig' => 'Le fichier est trop gros. La taille maximale est de %size%',
        'enterTitle' => 'Entrez un titre',
        'enterCategoryName' => 'Entrez un nom de catégorie.',
        'selectParentCategory' => 'Sélectionnez une catégorie parent valide.',
        'selectCategoryType' => 'Sélectionnez un type de catégorie.',
        'selectCategory' => 'Sélectionnez une catégorie valide.',
        'selectArticleType' => "Sélectionnez un type d'article.",
        'enterContent' => 'Entrez du contenu.',
        'enterDepartmentName' => 'Entrez un nom de département.',
        'selectDepartmentType' => 'Sélectionnez un type de département valide.',
        'enterFullName' => 'Entrez votre nom et prénom.',
        'enterUsername' => "Entrez un nom d'utilisateur valide.",
        'usernameTaken' => "Nom d'utilisateur déjà utilisé.",
        'emailTaken' => 'E-mail déjà utilisé.',
        'selectTypeAccess' => "Sélectionnez un type d'accès valide.",
        'enterPassword' => 'Entrez un mot de passe valide (minimum 6 caractères).',
        'selectLogo' => 'Sélectionnez une image valide.',
        'logoSize' => 'Le logo est trop grand. La taille maximale est de %size%',
        'uploadingLogo' => 'Erreur de téléchargement du logo, réessayez.',
        'enterSiteName' => 'Entrez le nom de la marque.',
        'enterWindowTitle' => 'Entrez le titre de la fenêtre.',
        'enterPageSize' => 'Entrez une taille de page valide.',
        'enterDateFormat' => 'Entrez le format de la date.',
        'selectTimezone' => 'Sélectionnez un fuseau horaire valide.',
        'selectCaptchaStatus' => 'Sélectionnez le statut du captcha.',
        'enterSiteKey' => 'Entrez site key.',
        'enterPrivateKey' => 'Entrez private key.',
        'enterMaxAttempts' => 'Entrez un nombre valide pour le nombre maximum de tentatives de connexion.',
        'enterMinutesIpLocking' => 'Entrez un nombre valide de minutes de verrouillage IP.',
        'emailExists' => 'E-mail existant.',
        'selectOutgoing' => "Sélectionnez un type d'e-mail sortant valide",
        'selectIncoming' => "Sélectionnez un type d'e-mail entrant valide",
        'emailTakenDepartment' => 'Other email has taken this support department.',
        'passwordsNotMatches' => 'Les nouveaux mots de passe saisis ne correspondent pas.',
        'wrongExistingPassword' => 'Votre mot de passe actuel est incorrect.',
        'passwordTooShort' => 'Le nouveau mot de passe doit comporter au moins 6 caractères.',
        'selectDepartment' => 'Sélectionnez un département.',
        'departmentNotExist' => "Le département sélectionné n'existe pas."
    ],
    'twoFactor' => [
        'title' => 'Authentification à deux facteurs',
        'info' => 'Protégez votre compte avec une connexion de haute sécurité.',
        'downloadApp' => "Téléchargez l'application pour android ou %1%iPhone%0% ou %2%iPad%0%",
        'secretKey' => 'Clé secrète',
        'verificationCode' => 'Code de vérification',
        'enter2FA' => 'Entrez les 6 chiffres de votre application mobile.',
        'backupCode' => 'Enregistrer ce code !',
        'activate' => "Activer l'authentification à deux facteurs",
        'deactivate' => "Désactiver l'authentification à deux facteurs",
        'activated' => 'Authentification à deux facteurs activée.',
        'deactivated' => 'Authentification à deux facteurs désactivée.',
        'error' => [
            'isActive' => 'Authentification à deux facteurs déjà activée.',
            'invalidCode' => 'Code de vérification invalide.',
            'invalidPassword' => 'Mot de passe invalide.'
        ]
    ]
];