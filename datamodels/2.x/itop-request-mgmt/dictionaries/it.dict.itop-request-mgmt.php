<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2024 Combodo SAS
 * @license    https://opensource.org/licenses/AGPL-3.0
 * 
 */
/**
 *
 */
Dict::Add('IT IT', 'Italian', 'Italiano', [
	'Class:Problem:KnownProblemList' => 'Problemi conosciuti',
	'Class:UserRequest' => 'Richeista utente',
	'Class:UserRequest+' => '~~',
	'Class:UserRequest/Attribute:approver_email' => 'Mail di approvazione',
	'Class:UserRequest/Attribute:approver_email+' => '~~',
	'Class:UserRequest/Attribute:approver_id' => 'Validatore',
	'Class:UserRequest/Attribute:approver_id+' => '~~',
	'Class:UserRequest/Attribute:assignment_date' => 'Data di Assegnazione',
	'Class:UserRequest/Attribute:assignment_date+' => '~~',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Messa in attesa cumulativa',
	'Class:UserRequest/Attribute:cumulatedpending+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag' => 'Spunta importante',
	'Class:UserRequest/Attribute:escalation_flag+' => '~~',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No ',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Si',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Si',
	'Class:UserRequest/Attribute:escalation_reason' => 'Motivazione Importante',
	'Class:UserRequest/Attribute:escalation_reason+' => '~~',
	'Class:UserRequest/Attribute:impact' => 'Impatto',
	'Class:UserRequest/Attribute:impact+' => 'Impact is the severity of the fault, how many end users are affected~~',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Un dipartimento',
	'Class:UserRequest/Attribute:impact/Value:1+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Un servizio',
	'Class:UserRequest/Attribute:impact/Value:2+' => '~~',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Una persona',
	'Class:UserRequest/Attribute:impact/Value:3+' => '~~',
	'Class:UserRequest/Attribute:last_pending_date' => 'Ultima data di messa in attesa',
	'Class:UserRequest/Attribute:last_pending_date+' => '~~',
	'Class:UserRequest/Attribute:origin' => 'Origine',
	'Class:UserRequest/Attribute:origin+' => 'What\'s the trigger of this request ticket creation~~',
	'Class:UserRequest/Attribute:origin/Value:chat' => 'Chat',
	'Class:UserRequest/Attribute:origin/Value:chat+' => 'Richiesta creata in seguito a una discussione in chat',
	'Class:UserRequest/Attribute:origin/Value:in_person' => 'Di persona',
	'Class:UserRequest/Attribute:origin/Value:in_person+' => 'Richiesta creata in seguito a una discussione di persona',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Mail',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'Mail',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Monitoraggio',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'Monitoraggio',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Telefono',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'Telefono',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Portale',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'Portale',
	'Class:UserRequest/Attribute:parent_change_id' => 'Cambio padre',
	'Class:UserRequest/Attribute:parent_change_id+' => '~~',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Rif. Cambio',
	'Class:UserRequest/Attribute:parent_change_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Problema Padre',
	'Class:UserRequest/Attribute:parent_problem_id+' => '~~',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Rif. Problema',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id' => 'Richiesta padre',
	'Class:UserRequest/Attribute:parent_request_id+' => '~~',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'Richiesta_padre_id_nome',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '~~',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Rif. Richiesta Utente',
	'Class:UserRequest/Attribute:parent_request_ref+' => '~~',
	'Class:UserRequest/Attribute:pending_reason' => 'Motivo della messa in attesa',
	'Class:UserRequest/Attribute:pending_reason+' => '~~',
	'Class:UserRequest/Attribute:priority' => 'Priorità',
	'Class:UserRequest/Attribute:priority+' => 'Order in which tickets need to be handled~~',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Critica',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'Critica',
	'Class:UserRequest/Attribute:priority/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Bassa',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'Bassa',
	'Class:UserRequest/Attribute:public_log' => 'Log Pubblico',
	'Class:UserRequest/Attribute:public_log+' => '~~',
	'Class:UserRequest/Attribute:related_request_list' => 'Richista figlio',
	'Class:UserRequest/Attribute:related_request_list+' => 'Tutte le richieste collegate a questa richiesta padre',
	'Class:UserRequest/Attribute:request_type' => 'Richista tipo',
	'Class:UserRequest/Attribute:request_type+' => '~~',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Incidente',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => 'Incidente',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Richiesta di servizio',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Richiesta di servizio',
	'Class:UserRequest/Attribute:resolution_code' => 'Codice di Risoluzione',
	'Class:UserRequest/Attribute:resolution_code+' => 'What was done to resolve the request?~~',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Assistenza',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'Assistenza',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Bug risolto',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'Bug Risolto',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Riparato Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'Riparato Hardware',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'Altro',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'Altro',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Software Patch',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'Software Patch',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'Sistema aggironato',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'Sistema aggironato',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Formazione',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'Formazione',
	'Class:UserRequest/Attribute:resolution_date' => 'Data di Risoluzione',
	'Class:UserRequest/Attribute:resolution_date+' => '~~',
	'Class:UserRequest/Attribute:service_id' => 'Servizio',
	'Class:UserRequest/Attribute:service_id+' => '~~',
	'Class:UserRequest/Attribute:service_name' => 'Nome Servizio',
	'Class:UserRequest/Attribute:service_name+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Servizio Sottocategoria',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => '~~',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Servizio Sottocategoria Nome',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA tto Oltre',
	'Class:UserRequest/Attribute:sla_tto_over+' => '~~',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA tto Oltrepassato',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA ttr Oltre ',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '~~',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA ttr Oltrepassato',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '~~',
	'Class:UserRequest/Attribute:solution' => 'Soluzione',
	'Class:UserRequest/Attribute:solution+' => '~~',
	'Class:UserRequest/Attribute:status' => 'Stato',
	'Class:UserRequest/Attribute:status+' => '~~',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Approvato',
	'Class:UserRequest/Attribute:status/Value:approved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Assegnato',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '~~',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Chiuso',
	'Class:UserRequest/Attribute:status/Value:closed+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Superato TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '~~',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Superato TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '~~',
	'Class:UserRequest/Attribute:status/Value:new' => 'Nuovo',
	'Class:UserRequest/Attribute:status/Value:new+' => '~~',
	'Class:UserRequest/Attribute:status/Value:pending' => 'In attesa',
	'Class:UserRequest/Attribute:status/Value:pending+' => '~~',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Rifiutato',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '~~',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Risolto',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '~~',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'In attesa di approvazione',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '~~',
	'Class:UserRequest/Attribute:time_spent' => 'Tempo di Risoluzione',
	'Class:UserRequest/Attribute:time_spent+' => '~~',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => 'Time To Own~~',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => 'Time To Resolve~~',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '~~',
	'Class:UserRequest/Attribute:urgency' => 'Urgenza',
	'Class:UserRequest/Attribute:urgency+' => 'How quickly the fault needs to be resolved~~',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Critica',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'Critica',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'Alta',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'Media',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Bassa',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'Bassa',
	'Class:UserRequest/Attribute:user_comment' => 'Commento utente',
	'Class:UserRequest/Attribute:user_comment+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Soddisfazione Utente',
	'Class:UserRequest/Attribute:user_satisfaction+' => '~~',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Veramente Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Veramente Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Abbastanza Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Abbastanza Soddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'piuttosto insoddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'piuttosto insoddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Veramente insoddisfatto',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Veramente insoddisfatto',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Non si può assegnare una richiesta padre a se stesso',
	'Class:UserRequest/Method:ResolveChildTickets' => 'Risolve ticket figli',
	'Class:UserRequest/Method:ResolveChildTickets+' => 'Inoltra la risolzuione ai ticket collegati ev_autosolve), e allinea le caratteriche della richiesta: Servizio, team , agente e informazioni della risoluzione',
	'Class:UserRequest/Stimulus:ev_approve' => 'Approva ',
	'Class:UserRequest/Stimulus:ev_approve+' => '~~',
	'Class:UserRequest/Stimulus:ev_assign' => 'Assegna ',
	'Class:UserRequest/Stimulus:ev_assign+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Chiuso Automaticamente',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '~~',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Risolto automaticamente',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_close' => 'Chiudi questa richiesta',
	'Class:UserRequest/Stimulus:ev_close+' => '~~',
	'Class:UserRequest/Stimulus:ev_pending' => 'Metti in Attesa',
	'Class:UserRequest/Stimulus:ev_pending+' => '~~',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Ri-Assegna',
	'Class:UserRequest/Stimulus:ev_reassign+' => '~~',
	'Class:UserRequest/Stimulus:ev_reject' => 'Rifiuta ',
	'Class:UserRequest/Stimulus:ev_reject+' => '~~',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Ri-Aprire',
	'Class:UserRequest/Stimulus:ev_reopen+' => '~~',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Segna come Risolto',
	'Class:UserRequest/Stimulus:ev_resolve+' => '~~',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:UserRequest/Stimulus:ev_timeout+' => '~~',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'In attesa di essere approvata',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '~~',
	'Class:UserRequest:KnownErrorList' => 'Errori conosciuti',
	'Class:UserRequest:KnownErrorList+' => 'Errori Conosciuti correlati al CI Funzionale collegato al ticket corrente',
	'Menu:NewUserRequest' => 'Nuova richista utente',
	'Menu:NewUserRequest+' => 'Creare un nuova richiesta utente',
	'Menu:RequestManagement' => 'Service Request',
	'Menu:RequestManagement+' => 'Service Request',
	'Menu:RequestManagementProvider' => 'Service Request Fornitore',
	'Menu:RequestManagementProvider+' => 'Service Request Fornitore',
	'Menu:SearchUserRequests' => 'Ricerca per richiesta utente',
	'Menu:SearchUserRequests+' => 'Ricerca per ticket',
	'Menu:UserRequest:EscalatedRequests' => 'Richiesta importante',
	'Menu:UserRequest:EscalatedRequests+' => 'Richiesta importante',
	'Menu:UserRequest:MyRequests' => 'Richieste assegnate a me',
	'Menu:UserRequest:MyRequests+' => 'Richieste assegnate a me (come operatore)',
	'Menu:UserRequest:MySupportRequests' => 'll mio supporto chiama',
	'Menu:UserRequest:MySupportRequests+' => 'll mio supporto chiama',
	'Menu:UserRequest:MyWorkOrders' => 'Work Order assegnati a me',
	'Menu:UserRequest:MyWorkOrders+' => 'Tutti i work order assegnati a me',
	'Menu:UserRequest:OpenRequests' => 'Tutte le richieste aperte',
	'Menu:UserRequest:OpenRequests+' => 'Tutte le richieste aperte',
	'Menu:UserRequest:Overview' => 'Panoramica',
	'Menu:UserRequest:Overview+' => 'Panoramica',
	'Menu:UserRequest:Provider' => 'Richeiste aperte trasferite al Provaider',
	'Menu:UserRequest:Provider+' => 'Richeiste aperte trasferite al Provaider',
	'Menu:UserRequest:Shortcuts' => 'Scorciatoia',
	'Menu:UserRequest:Shortcuts+' => '~~',
	'Organization:Overview:MyUserRequests' => 'Le Mie richieste utente per questa organizzazione',
	'Organization:Overview:Tickets' => 'Ticket per questa organizzazione',
	'Organization:Overview:UserRequests' => 'Richieste utente per questa organizzazione',
	'Portal:Button:CreateRequestFromService' => 'Create una Richiesta per questo servizio',
	'Portal:ButtonClose' => 'Chiuso',
	'Portal:ButtonReopen' => 'Riaperto',
	'Portal:ButtonUpdate' => 'Aggiornameno',
	'Portal:ChooseYourFavoriteLanguage' => 'Selezionate la vostra lingua preferita',
	'Portal:Details-Service-Element' => 'Elementi del servizio',
	'Portal:LanguageChangedTo_Lang' => 'Lingua cambiata in',
	'Portal:ListOpenProblems' => 'Problema in corso',
	'Portal:ListOpenRequests' => 'Lista delle richieste aperte',
	'Portal:ListServices' => 'Lista dei servizi',
	'Portal:NoClosedTicket' => 'Richieste non chiuse',
	'Portal:NoOpenProblem' => 'Nessun Problema aperto',
	'Portal:NoService' => '~~',
	'Portal:SelectLanguage' => 'Cambiare lingua',
	'Portal:SelectRequestType' => 'Selezionare il tipo di richiesta',
	'Portal:SelectServiceElementFrom_Service' => 'Selezionare gli elementi del servizio per %1s',
	'Portal:ShowFaqs' => 'FAQs',
	'Portal:ShowProblem' => 'Problemi ',
	'Portal:ShowServices' => 'Catalogo di servizio',
	'Portal:TitleDetailsFor_Request' => 'Dettagi della richiesta',
	'Portal:TitleDetailsFor_Service' => 'Dettagli dei servizi',
	'Portal:UserRequest:MoreInfo' => 'Piu informazioni',
	'Tickets:Related:OpenIncidents' => 'Incidenti aperti',
	'UI-RequestManagementOverview-Last-14-days' => 'Richieste degli ultimi 14 giorni (per tipo)',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Richeiste aperte per agente',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Richeiste aperte per organizzazione',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Richeiste aperte per stato',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Richeiste aperte per tipo',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Richieste degli ultimi 14 giorni (per tipo)',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Richiesta assegnata a me',
]);
