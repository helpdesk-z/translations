<?php
return [
    'login' => [
        'title' => 'Faça login na sua conta',
        'invalidUsernamePassword' => 'nome de usuário ou senha inválidos.',
        'lockedMinutes' => 'Conta bloqueada por %minutes% minutes.',
        'attemptNumber' => '(%attempt1% de %attempt2% tentativas)',
        'accountLocked' => 'Conta está bloqueada.',
        'rememberMe' => 'Lembre de mim',
        'button' => 'Conecte-se'
    ],
    'dashboard' => [
        'menu' => 'Painel'
    ],
    'tickets' => [
        'menu' => 'Tickets',
        'showingResults' => 'Mostrando %x% to %y% of %z%',
        'totalReplies' => '%number% respostas',
        'id' => 'Número do ticket',
        'removeConfirmation' => 'Tem certeza de que deseja remover esses tickets?',
        'showOverdueOnly' => 'Mostrar apenas tickets antigos',
        'active' => 'Ativo',
        'attachmentRemoved' => 'O anexo foi removido.',
        'messageSent' => 'Sua mensagem foi enviada.',
        'newTicket' => 'Novo ticket',
        'submitNewTicket' => 'Envie novo ticket',
        'fullName' => 'Opcional. Se o ticket for enviado para um usuário existente, digite apenas o e-mail.',
        'departments' => 'Departamentos',
        'agentsAssigned' => 'Agentes atribuídos',
        'departmentsRemoveConfirmation' => 'Você realmente deseja remover este departamento e seus tickets?',
        'departmentRemoved' => 'Departamento e seus tíquetes foram removidos.',
        'departmentUpdated' => 'Departamento foi atualizado.',
        'editDepartment' => 'Editar departamento',
        'newDepartment' => 'Novo departamento',
        'departmentCreated' => 'Novo departamento foi criado.',
        'notes' => 'Notas',
        'notesRemoveConfirmation' => 'Você realmente deseja remover esta nota?',
        'invalidRequest' => 'Pedido inválido.',
        'noteRemoved' => 'Nota foi removida.',
        'noteUpdated' => 'Nota foi atualizada.',
        'enterNote' => 'Digite sua nota.',
        'notesSaved' => 'Sua nota foi adicionada.',
        'addNote' => 'Adicionar nota'
    ],
    'account' => [
        'menu' => 'Conta',
        'online' => 'online',
        'loginLog' => 'Logs de login',
        'logout' => 'Sair',
        'profile' => 'Perfil',
        'changePassword' => 'Mudar senha',
        'timezone' => 'Fuso horário',
        'timezoneDescription' => 'Se você não selecionar um fuso horário, o fuso horário padrão do helpdesk será usado.',
        'passwordUpdated' => 'A senha foi alterada.',
        'profileUpdated' => 'Seu perfil foi atualizado.',
        'avatarRemoved' => 'Avatar foi removido.'
    ],
    'cannedResponses' => [
        'menu' => 'Respostas Prontas',
        'removeConfirmation' => 'Você realmente deseja remover essas respostas automáticas?',
        'edit' => 'Editar resposta automática',
        'new' => 'Nova resposta pronta'
    ],
    'kb' => [
        'menu' => 'Acesso Rápido',
        'articles' => 'Artigos',
        'categories' => 'Categorias',
        'newCategory' => 'Nova categoria',
        'category' => 'Categoria',
        'editCategory' => 'Editar categoria',
        'addSubcategory' => 'Adicionar subcategoria',
        'newArticle' => 'Novo artigo',
        'removeCategory' => 'Remover categoria',
        'removeConfirmation' => 'Você realmente deseja remover esta categoria, suas subcategorias e seus artigos?',
        'categoryRemoved' => 'Categoria foi removida.',
        'categoryCreated' => 'Nova categoria foi criada.',
        'categoryUpdated' => 'A categoria foi atualizada.',
        'article' => 'Artigo',
        'author' => 'Autor',
        'editArticle' => 'Editar artigo',
        'removeArticleConfirmation' => 'Você realmente deseja remover este artigo?'
    ],
    'agents' => [
        'menu' => 'Atendentes',
        'agentRemoved' => 'Atendente foi removido.',
        'registration' => 'Cadastro',
        'lastLogin' => 'Último Login',
        'administrator' => 'Administrador',
        'agent' => 'Atendente',
        'edit' => 'Editar atendente',
        'new' => 'Novo atendente',
        'informationUpdated' => 'As informações do atendente foram atualizadas.',
        'removeConfirmation' => 'Você realmente deseja remover este atendente?',
        'agentCreated' => 'Novo atendente foi criado.',
        'assignedDepartments' => 'Departamentos atribuídos'
    ],
    'settings' => [
        'menu' => 'Configurar',
        'general' => 'Configurações Gerais',
        'security' => 'Configurações de segurança',
        'tickets' => 'Configurações de ingressos',
        'kb' => 'Configurações da base de conhecimento',
        'emailAddresses' => 'Endereço de e-mail',
        'emailTemplates' => 'Modelos de email',
        'changeLogo' => 'Alterar logotipo',
        'logoRestored' => 'O logotipo padrão foi restaurado.',
        'logoChanged' => 'O logotipo foi alterado.',
        'brandName' => 'Marca',
        'brandNameDescription' => ' O nome da empresa será usado para marcar o helpdesk e os e-mails enviados. Por exemplo: QZAP.com.br.',
        'windowTitle' => 'Título da página',
        'windowTitleDescription' => 'Este é o título que aparece na guia do navegador. Se a sua página de helpdesk estiver marcada, este será o título / nome da página do site.',
        'pageSize' => 'Tamanho de página padrão',
        'pageSizeDescription' => 'Escolha o número de itens mostrados por página.',
        'dateFormat' => 'Formato de data',
        'dateFormatDescription' => 'Defina o formato de data para clientes. [a] Veja a tabela de formatação de datas do PHP[/a]',
        'defaultTimezone' => 'Fuso horário padrão',
        'defaultTimezoneDescription' => 'Selecione o fuso horário padrão para novos clientes ou funcionários, isso será aplicado se o cliente ou equipe não selecionou nenhum em suas preferências.',
        'defaultServerTimezone' => 'Fuso horário padrão do servidor',
        'maintenanceMode' => 'Modo de manutenção',
        'maintenanceMessage' => 'Mensagem de manutenção',
        'recaptchaStatus' => 'Status do reCAPTCHA',
        'siteKey' => 'Chave do site',
        'privateKey' => 'Chave privada',
        'maxLoginAttempts' => 'Número máximo de tentativas de login',
        'minutesIpLocking' => 'Minutos de bloqueio de IP após exceder o número máximo de tentativas de login',
        'updated' => 'As configurações foram atualizadas.',
        'displayOrderReplies' => 'Exibir pedido para respostas de tickets',
        'ticketsPerPage' => 'Tickets por página',
        'ticketsPerPageDescription' => 'O número máximo de ingressos para mostrar antes de dividir em várias páginas.',
        'repliesPerPage' => 'Respostas por página',
        'repliesPerPageDescription' => 'O número máximo de respostas de tickets a serem mostradas antes de dividir em várias páginas.',
        'defaultDeadline' => 'Prazo de tempo de resposta padrão',
        'defaultDeadlineDescription' => 'Se o agente não for atendido dentro dessas horas, o ticket será marcado como vencido.',
        'defaultAutoClose' => 'Hora padrão para fechar o tíquete',
        'defaultAutoCloseDescription' => 'Se o cliente não responder após esse horário, o tíquete será automaticamente fechado.',
        'allowAttachments' => 'Permitir anexos',
        'numberAttachments' => 'Número de anexos permitidos',
        'maxUploadSize' => 'Tamanho máximo de upload',
        'maxUploadSizeDescription' => 'De acordo com a configuração do PHP, não pode ser maior que% do tamanho%',
        'allowedFileTypes' => 'Tipos de arquivo permitidos',
        'allowedFileTypesDescription' => 'Insira a extensão de arquivo permitida para anexos separados por vírgulas.',
        'newestReplyFirst' => 'Resposta mais recente primeiro',
        'oldestReplyFirst' => 'Resposta mais antiga primeiro',
        'articlesUnderCategory' => 'Artigos para exibir em uma categoria',
        'charLimitArticlePreview' => 'Limite de caracteres da visualização do artigo',
        'charLimitArticlePreviewDescription' => 'O número máximo de caracteres a serem exibidos nas visualizações do artigo.',
        'popularArticles' => 'Número de artigos populares para exibir',
        'newestArticles' => 'Número de artigos mais recentes para exibir',
        'editEmailTemplate' => 'Editar modelo de e-mail',
        'defaultEmailAddressDescription' => 'O endereço de e-mail padrão é usado para enviar notificações ou mensagens de departamentos que não têm um endereço de e-mail associado.',
        'newEmailAddress' => 'Novo endereço de Email',
        'emailDeletionConfirm' => 'Você realmente deseja remover este e-mail?',
        'outgoing' => 'Extrovertido',
        'host' => 'Host',
        'port' => 'Porta',
        'encryption' => 'Encriptação',
        'incoming' => 'Entrada',
        'incomingInformation' => 'O sistema excluirá todos os e-mails da caixa de correio após o download. Isso é feito para garantir o melhor desempenho para o processo de tratamento de e-mail no lado do servidor web. Se você quiser um backup dos e-mails, recomendamos criar uma nova caixa de correio para encaminhar todos os e-mails recebidos.',
        'editEmailAddress' => 'Editar endereço de e-mail',
        'emailTemplateUpdated' => 'O modelo de email foi atualizado.',
        'defaultEmailChanged' => 'O endereço de e-mail inadimplente foi alterado.',
        'emailRemoved' => 'O endereço de e-mail foi removido.',
        'smtpHost' => 'SMTP do Host',
        'smtpPort' => 'Porta SMTP',
        'smtpEncryption' => 'SMTP Encriptação',
        'incomingHost' => 'Entrada Host',
        'incomingPort' => 'Porta de Entrada',
        'incomingUsername' => 'Nome de usuário de entrada',
        'incomingPassword' => 'Senha de entrada',
        'emailCreated' => 'Novo e-mail foi adicionado.',
        'emailUpdated' => 'Email foi atualizado.',
    ],
    'tools' => [
        'menu' => 'Ferramentas',
        'customFields' => 'Campos personalizados',
        'fieldTitle' => 'Título do campo',
        'fieldType' => 'Tipo de campo',
        'required' => 'Requerido',
        'newCustomField' => 'Novo campo personalizado',
        'editCustomField' => 'Editar campo personalizado',
        'textField' => 'Campo de texto',
        'textArea' => 'Área de texto',
        'checkbox' => 'Caixa de seleção',
        'radio' => 'Opção',
        'dropdownSelect' => 'Seleção suspensa',
        'date' => 'Data',
        'defaultValue' => 'Valor padrão',
        'options' => 'Opções',
        'optionsDescription' => ' Insira uma opção por linha. Cada linha será uma escolha que seus clientes podem escolher',
        'select' => 'Selecione',
        'customFieldInserted' => 'Novo campo personalizado foi criado.',
        'customFieldUpdated' => 'Os campos personalizados foram atualizados.',
        'customFieldConfirm' => 'Você realmente deseja remover este campo personalizado?',
        'invalidCustomField' => 'Campo personalizado inválido.',
        'customFieldRemoved' => 'O campo personalizado foi removido.'
    ],
    'users' => [
        'menu' => 'Menu',
        'newUser' => 'Novo usuário',
        'editUser' => 'Editar usuário',
        'removeUserConfirmation' => 'Tem certeza de que deseja remover este usuário e seu / sua tickets?',
        'userRemoved' => 'O usuário foi removido.',
        'notifyNewAccount' => 'Enviar e-mail ao usuário com informações da conta',
        'accountCreated' => 'A conta do usuário foi criada.',
        'accountUpdated' => 'A conta do usuário foi atualizada.'
    ],
    'form' => [
        'username' => 'Nome de usuário',
        'password' => 'Senha',
        'searchTicket' => 'Buscar ticket',
        'keyword' => 'Palavra-chave',
        'dateOpened' => 'Data de abertura',
        'lastUpdate' => 'Última atualização',
        'department' => 'Departamento',
        'allDepartments' => 'Todos os departamentos',
        'status' => 'Status',
        'search' => 'Procurar',
        'open' => 'Aberto',
        'answered' => 'Respondidos',
        'awaiting_reply' => 'Aguardando resposta',
        'in_progress' => 'Em andamento',
        'closed' => 'Fechados',
        'overdue' => 'Atrasado',
        'todayAt' => 'Hoje as %date%',
        'yesterdayAt' => 'Ontem as %date%',
        'subject' => 'Titulo',
        'lastReply' => 'Última resposta',
        'priority' => 'Prioridade',
        'massAction' => 'Ação em massa',
        'noChange' => 'Sem mudança',
        'submit' => 'Enviar',
        'delete' => 'Deletar',
        'cancel' => 'Cancelar',
        'general' => 'Geral',
        'reply' => 'Responder',
        'createdOn' => 'Criado em %date%',
        'updatedOn' => 'Atualizado em %date%',
        'save' => 'Salvar',
        'to' => 'Para',
        'quickInsert' => 'Inserção rápida',
        'attachments' => 'Anexos',
        'allowedFiles' => 'Arquivos permitidos',
        'browse' => 'Navegar',
        'chooseFile' => 'Escolher arquivo',
        'quote' => 'Citar',
        'staff' => 'Pessoal',
        'uploadImage' => 'Upload de imagem',
        'total' => 'Total',
        'download' => 'Download',
        'dropImageHere' => 'Solte a imagem aqui para fazer o upload',
        'fullName' => 'Nome completo',
        'email' => 'Endereço de email',
        'dateCreated' => 'Data criada',
        'createdBy' => 'Criado por',
        'title' => 'Título',
        'message' => 'Mensagem',
        'specialTags' => 'Tags especiais',
        'clientName' => 'Nome do cliente',
        'clientEmail' => 'Endereço de e-mail do cliente',
        'goBack' => 'Volte',
        'type' => 'Tipo',
        'public' => 'Público',
        'private' => 'Privado',
        'action' => 'Ação',
        'categoryName' => 'Nome da Categoria',
        'parentCategory' => 'Categoria Parental',
        'rootCategory' => 'Categoria Raiz',
        'view' => 'Visualizar',
        'all' => 'Todos',
        'views' => 'Visualizações',
        'displayOrder' => 'Ordem de exibição',
        'beginningList' => 'No início da lista',
        'endList' => 'No final da lista',
        'afterItem' => 'Depois de %item%',
        'notModify' => 'Não modifique',
        'never' => 'Nunca',
        'active' => 'Ativo',
        'locked' => 'Fechado',
        'leaveBlankNotChange' => 'Deixe em branco para não alterar.',
        'yes' => 'Sim',
        'no' => 'Não',
        'enable' => 'Habilitar',
        'disable' => 'Desabilitar',
        'default' => 'Pré definição',
        'setDefault' => 'Conjunto padrão',
        'edit' => 'Editar',
        'emailName' => 'Nome de email',
        'none' => 'Nenhum',
        'signature' => 'Assinatura',
        'newPassword' => 'Nova Senha',
        'existingPassword' => 'Senha existente',
        'confirm' => 'Confirme',
        'enterExistingPassword' => 'Digite sua senha existente.',
        'enterNewPassword' => 'Digite sua nova senha.',
        'manage' => 'Gerenciar',
        'avatar' => 'Avatar',
        'deleteAvatar' => 'Deletar avatar',
        'user' => 'Usuário',
    ],
    'error' => [
        'recordsNotFound' => 'Registros não encontrados.',
        'noItemsSelected' => 'Você não selecionou um ticket.',
        'invalidCannedResponse' => 'A resposta automática inválido.',
        'ticketNotFound' => 'Ticket não foi encontrado.',
        'ticketNotPermission' => 'Você não tem permissão para ver o ticket.',
        'invalidDepartment' => 'Departamento invalido.',
        'invalidStatus' => 'Status inválido.',
        'invalidPriority' => 'A prioridade esta inválida.',
        'enterMessage' => 'Digite sua mensagem.',
        'enterValidEmail' => 'Digite um endereço de e-mail válido.',
        'enterSubject' => 'Digite o assunto.',
        'fileNotAllowed' => 'Arquivo não permitido.',
        'fileBig' => 'O arquivo é muito grande. O tamanho máximo é% size%',
        'enterTitle' => 'Digite o título',
        'enterCategoryName' => 'Insira o nome da categoria.',
        'selectParentCategory' => 'Selecione uma categoria pai válida.',
        'selectCategoryType' => 'Selecione o tipo de categoria.',
        'selectCategory' => 'Selecione uma categoria válida.',
        'selectArticleType' => 'Selecione o tipo de artigo.',
        'enterContent' => 'Insira o conteúdo.',
        'enterDepartmentName' => 'Insira um nome de departamento.',
        'selectDepartmentType' => 'Selecione um tipo de departamento válido.',
        'enterFullName' => 'Digite o nome completo.',
        'enterUsername' => 'Digite um nome de usuário válido.',
        'usernameTaken' => 'O nome de usuário está sendo usado por outro atendente.',
        'emailTaken' => 'O e-mail está sendo usado por outro usuário.',
        'selectTypeAccess' => 'Selecione um tipo de acesso válido.',
        'enterPassword' => 'Digite uma senha válida. Deve ter pelo menos 6 caracteres de comprimento.',
        'selectLogo' => 'Selecione uma imagem válida para o logotipo.',
        'logoSize' => 'O logotipo é muito grande. O tamanho máximo é% tamanho%',
        'uploadingLogo' => 'Erro ao fazer upload do logotipo, tente novamente.',
        'enterSiteName' => 'Insira o nome da marca.',
        'enterWindowTitle' => 'Insira o título da janela.',
        'enterPageSize' => 'Insira um tamanho de página válido.',
        'enterDateFormat' => 'Insira o formato da data.',
        'selectTimezone' => 'Selecione um fuso horário válido.',
        'selectCaptchaStatus' => 'Selecione o status do captcha.',
        'enterSiteKey' => 'Insira a chave do site.',
        'enterPrivateKey' => 'Insira a chave privada.',
        'enterMaxAttempts' => 'Insira um número válido para máximo de tentativas de login.',
        'enterMinutesIpLocking' => 'Digite um número válido para minutos de bloqueio de IP.',
        'emailExists' => 'Endereço de email já existe.',
        'selectOutgoing' => 'Selecione um tipo válido de e-mail de saída',
        'selectIncoming' => 'Selecione um tipo válido de e-mail de entrada',
        'emailTakenDepartment' => 'Outro e-mail pegou este departamento de suporte.',
        'passwordsNotMatches' => 'As senhas  não coincidem.',
        'wrongExistingPassword' => 'Sua senha está incorreta.',
        'passwordTooShort' => 'A nova senha deve ter pelo menos 6 caracteres.',
        'selectDepartment' => 'Selecione um departamento.',
        'departmentNotExist' => 'O departamento selecionado não existe.'
    ],
    'twoFactor' => [
        'title' => 'Autenticação de dois fatores',
        'info' => 'Proteja sua conta com login de alta segurança.',
        'downloadApp' => ' Baixe o aplicativo para Android ou %1%iPhone%0% and %2%iPad%0%',
        'secretKey' => 'Chave secreta',
        'verificationCode' => 'Código de verificação',
        'enter2FA' => 'Insira os 6 dígitos do seu celular.',
        'backupCode' => 'Salve este código!',
        'activate' => 'Ativar autenticação de dois fatores',
        'deactivate' => 'Desativar autenticação de dois fatores',
        'activated' => 'A autenticação de dois fatores foi ativada.',
        'deactivated' => 'A autenticação de dois fatores foi desativada.',
        'error' => [
            'isActive' => 'A autenticação de dois fatores já está ativa.',
            'invalidCode' => 'O código de verificação não é válido.',
            'invalidPassword' => 'Senha não é válida.'
        ]
    ]
];