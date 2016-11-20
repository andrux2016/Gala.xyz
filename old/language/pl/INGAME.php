<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan Kröpke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2012 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.3 (2013-05-19)
 * @info $Id: INGAME.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */

$LNG['Messages']							= 'Wiadomości';
$LNG['write_message']						= 'Napisz wiadomość';

$LNG['PM']									= '[PW]';
$LNG['ready']								= 'Gotowe';

$LNG['loading']								= 'Ładuję';

$LNG['invalid_action']						= 'Niedozwolona akcja';

$LNG['type_mission'][1]  					= 'Atak';
$LNG['type_mission'][2]  					= 'ACS Atak';
$LNG['type_mission'][3]  					= 'Transport';
$LNG['type_mission'][4]  					= 'Stacjonuj';
$LNG['type_mission'][5]  					= 'Zostań';
$LNG['type_mission'][6]  					= 'Szpieguj';
$LNG['type_mission'][7]  					= 'Kolonizuj';
$LNG['type_mission'][8]  					= 'Recykling';
$LNG['type_mission'][9]  					= 'Zniszcz';
$LNG['type_mission'][10]  					= 'Atak Rakietowy';
$LNG['type_mission'][11]  					= 'DM Investigation';
$LNG['type_mission'][15] 					= 'Ekspedycja';

$LNG['type_planet'][1]  					= 'Planeta';
$LNG['type_planet'][2]  					= 'Pole zniszczeń';
$LNG['type_planet'][3]  					= 'Księżyc';


$LNG['user_level'] = array (
	'0' => 'Gracz',
	'1' => 'Moderator',
	'2' => 'Operator',
	'3' => 'Administrator',
);
// GAME.PHP
$LNG['page_doesnt_exist']					= 'Brak strony!';
$LNG['bad_forum_url']				    	= 'Zły format adresu strony!';
$LNG['admin_access_1']				    	= 'Tymczasowo masz dostęp do funkcji administracyjnych';
$LNG['admin_access_link']				    = 'Deaktywuj go';
$LNG['admin_access_2']				    	= ', jeśli nie używasz.';


//----------------------------------------------------------------------------//
//TOPNAV
$LNG['tn_vacation_mode']					= 'Jesteś w trybie urlopu ';
$LNG['tn_delete_mode']						= 'Twoje konto zostanie automatycznie usunięte %s ';

//----------------------------------------------------------------------------//
//LEFT MENU
$LNG['lm_overview']							= 'Podgląd';
$LNG['lm_galaxy']							= 'Galaktyka';
$LNG['lm_empire']							= 'Imperium';
$LNG['lm_fleet']							= 'Flota';
$LNG['lm_buildings']						= 'Budynki';
$LNG['lm_research']							= 'Badania';
$LNG['lm_shipshard']						= 'Stocznia';
$LNG['lm_defenses']							= 'Obrona';
$LNG['lm_resources']						= 'Zasoby';
$LNG['lm_officiers']						= 'Oficerowie';
$LNG['lm_trader']							= 'Handlarz';
$LNG['lm_fleettrader']						= 'Złomowanie floty';
$LNG['lm_technology']						= 'Technologie';
$LNG['lm_messages']							= 'Wiadomości';
$LNG['lm_alliance']							= 'Sojusz';
$LNG['lm_buddylist']						= 'Lista znajomych';
$LNG['lm_notes']							= 'Notes';
$LNG['lm_statistics']						= 'Statystyki';
$LNG['lm_search']							= 'Szukaj';
$LNG['lm_options']							= 'Opcje';
$LNG['lm_banned']							= 'Zbanowani';

$LNG['lm_forums']							= 'Forum';
$LNG['lm_logout']							= 'Wyloguj';
$LNG['lm_administration']					= 'Administracja';
$LNG['lm_queue']							= 'Kolejka';
$LNG['lm_topkb']							= 'Hala sław';
$LNG['lm_faq']								= 'FAQ';
$LNG['lm_records']							= 'Rekordy';
$LNG['lm_chat']								= 'Chat';
$LNG['lm_changelog']						= 'Lista zmian';
$LNG['lm_support']							= 'Pomoc techniczna';
$LNG['lm_rules']							= 'Regulamin';
$LNG['lm_battlesim']						= 'Symulator walki';
$LNG['lm_playercard']                       = 'Informacje o graczu';
$LNG['lm_info']                     		= 'Informacje';
$LNG['lm_disclamer']						= 'Impressum';
	
//----------------------------------------------------------------------------//
//OVERVIEW

$LNG['ov_newname_specialchar']				= 'Nazwa planety może zawierać tylko litery i cyfry. Oraz _, -, .';
$LNG['ov_newname_done']						= 'Nazwa planety zmieniona';
$LNG['ov_planet_abandoned']					= 'Planeta porzucona';
$LNG['ov_principal_planet_cant_abanone']	= 'Nie możesz porzucić planety matki';
$LNG['ov_abandon_planet_not_possible']		= 'Nie możesz porzucić aktywnej koloni (floty lub budynki w budowie!)';
$LNG['ov_wrong_pass']						= 'Błędne hasło, spróbuj ponownie';
$LNG['ov_have_new_message']					= 'Masz wiadomość';
$LNG['ov_have_new_messages']				= 'Masz %d nowych wiadomości';
$LNG['ov_planetmenu']						= 'Zmień nazwę / Porzuć planetę';
$LNG['ov_free']								= 'Frei';
$LNG['ov_buildings']						= 'No budynku w trakcie budowy.';
$LNG['ov_research']							= 'Nie ma trwaja; badania w tym czasie.';
$LNG['ov_hangar']							= 'Nie kaz.dy statek lub obronne zbudowane w tym czasie.';
$LNG['ov_news']								= 'Nowości';
$LNG['ov_place']							= 'Miejsce';
$LNG['ov_of']								= 'z';
$LNG['ov_planet']							= 'Planeta';
$LNG['ov_server_time']						= 'Czas na serwerze ';
$LNG['ov_events']							= 'Nowości';
$LNG['ov_no_events']						= 'Brak ruchów plywaja;ce';
$LNG['ov_diameter']							= 'Średnica';
$LNG['ov_distance_unit']					= 'km';
$LNG['ov_temperature']						= 'Temperatura';
$LNG['ov_aprox']							= 'od';
$LNG['ov_temp_unit']						= '°C';
$LNG['ov_to']								= 'do';
$LNG['ov_position']							= 'Pozycja';
$LNG['ov_points']							= 'Punkty';
$LNG['ov_security_request']					= 'Pytanie pomocniczne';
$LNG['ov_security_confirm']					= 'Potwierdź że chcesz porzucić planetę %s .';
$LNG['ov_password']							= 'Hasło';
$LNG['ov_delete_planet']					= 'Porzuć';
$LNG['ov_planet_rename']					= 'Zmień nazwę';
$LNG['ov_rename_label']						= 'Nowa nazwa';
$LNG['ov_fields']							= 'Pola';
$LNG['ov_developed_fields']					= 'zabudowane pola';
$LNG['ov_max_developed_fields']				= 'max. pól do zabudowy';
$LNG['ov_fleet']							= 'Floty';
$LNG['ov_admins_online']					= 'Szefowie(On-line): ';
$LNG['ov_player_online']					= 'Gracze(On-line) / Całkowity: ';
$LNG['ov_no_player_online']					= '0';
$LNG['ov_no_admins_online']					= '0';
$LNG['ov_user_last_new']					= 'Ostatni zarejestrowany: ';
$LNG['ov_userbanner']						= 'Statystyki -Banner';
$LNG['ov_userrank_info']					= '%s (%s <a href="game.php?page=statistics&amp;range=%d">%d</a> %s %s)';
$LNG['ov_teamspeak_not_online']				= 'TeamspeakServer chwilowo nie dostępny';
$LNG['ov_teamspeak']						= 'Teamspeak';
$LNG['ov_teamspeak_connect']				= 'Połącz';
$LNG['ov_teamspeak_online']					= 'Online';
$LNG['ov_closed']							= 'Gra chwilowo nie aktywna!';
$LNG['ov_reflink']							= 'Link referencyjny';
$LNG['ov_noreflink']						= 'Nikogo nie zwerbowałeś do gry';
$LNG['ov_chat_online']						= 'Użytkownicy na czacie:';


//----------------------------------------------------------------------------//
//GALAXY

$LNG['gl_no_deuterium_to_view_galaxy']		= 'Nie masz wystarczającej ilości Deuterium!';
$LNG['gl_legend']							= 'Legenda';
$LNG['gl_name']								= 'Nazwa';
$LNG['gl_strong_player']					= 'Mocny gracz';
$LNG['gl_week_player']						= 'Słaby gracz';
$LNG['gl_vacation']							= 'Urlop';
$LNG['gl_banned']							= 'Zbanowany';
$LNG['gl_inactive_seven']					= '7 dni nie aktywny';
$LNG['gl_inactive_twentyeight']				= '28 dni nie aktywny';
$LNG['gl_short_strong']						= 's';
$LNG['gl_short_newbie']						= 'n';
$LNG['gl_short_vacation']					= 'u';
$LNG['gl_short_ban']						= 'g';
$LNG['gl_short_inactive']					= 'i';
$LNG['gl_short_long_inactive']				= 'I';
$LNG['gl_short_enemy']						= '';
$LNG['gl_short_friend']						= '';
$LNG['gl_short_member']						= '';
$LNG['gl_populed_planets']					= '%d planeta zamieszkana';
$LNG['gl_out_space']						= 'Ekspedycja na skraj systemu';
$LNG['gl_avaible_missiles']					= 'Rakiety międzyplanetarne';
$LNG['gl_fleets']							= 'Ilość slotów floty';
$LNG['gl_avaible_grecyclers']				= 'Gigarecyklery';
$LNG['gl_avaible_recyclers']				= 'Recyklery';
$LNG['gl_avaible_spyprobes']				= 'Sondy szpiegowskie';
$LNG['gl_missil_launch']					= 'Atak rakietami';
$LNG['gl_missil_to_launch']					= 'Ilość rakiet (<b>%d</b> dostępnych):';
$LNG['gl_all_defenses']						= 'Wszystkie';
$LNG['gl_objective']						= 'Główny cel';
$LNG['gl_missil_launch_action']				= 'Wyślij';
$LNG['gl_galaxy']							= 'Galaktyka';
$LNG['gl_solar_system']						= 'System';
$LNG['gl_show']								= 'Pokaż';
$LNG['gl_pos']								= 'Pos';
$LNG['gl_planet']							= 'Planeta';
$LNG['gl_name_activity']					= 'Nazwa (Aktywność)';
$LNG['gl_moon']								= 'Księżyc';
$LNG['gl_debris']							= 'PZ';
$LNG['gl_player_estate']					= 'Gracz (Status)';
$LNG['gl_alliance']							= 'Sojusz';
$LNG['gl_actions']							= 'Akcja';
$LNG['gl_spy']								= 'Szpiegowanie';
$LNG['gl_buddy_request']					= 'Zaproś do znajomych';
$LNG['gl_missile_attack']					= 'Atak rakietami';
$LNG['gl_with']								= ' z ';
$LNG['gl_member']							= '%d Użytkownicy';
$LNG['gl_member_add']						= '%d Użytkownik';
$LNG['gl_alliance_page']					= 'Strona sojuszu';
$LNG['gl_see_on_stats']						= 'Statystyka';
$LNG['gl_alliance_web_page']				= 'Strona domowa sojuszu';
$LNG['gl_debris_field']						= 'Pole zniszczeń';
$LNG['gl_collect']							= 'Zbierz';
$LNG['gl_resources']						= 'Zasoby';
$LNG['gl_features']							= 'Funkcje';
$LNG['gl_diameter']							= 'Średnica';
$LNG['gl_temperature']						= 'Temperatura';
$LNG['gl_phalanx']							= 'Falanga';
$LNG['gl_planet_destroyed']					= 'Zniszczona planeta';
$LNG['gl_playercard']						= 'Karta gracza';
$LNG['gl_in_the_rank']						= 'Gracz %s pozycja w rankingu %d';
$LNG['gl_activity']                         = '(*)';
$LNG['gl_activity_inactive']                = '(%d min)';
$LNG['gl_ajax_status_ok']                   = 'Zrobione';
$LNG['gl_ajax_status_fail']                	= 'Błąd';
$LNG['gl_free_desc'] 						= 'Niezamieszkana planeta, skolonizuj ją nim cie ktoś ubiegnie!';
$LNG['gl_free'] 							= 'Free';
$LNG['gl_yes'] 								= 'Tak';
$LNG['gl_no'] 								= 'Nie';
$LNG['gl_points'] 							= 'Punkty';
$LNG['gl_player']							= 'Gracz';
$LNG['gl_to']								= 'do';


//----------------------------------------------------------------------------//
//PHALANX
$LNG['px_no_deuterium']						= 'Nie masz wystarczającej ilości deuterium!';
$LNG['px_scan_position']					= 'Skanuj pozycje';
$LNG['px_fleet_movement']					= 'Aktualne ruchy flot';
$LNG['px_no_fleet']							= 'Brak aktywnych flot.';
$LNG['px_out_of_range']						= 'Poza zasięgiem';

//----------------------------------------------------------------------------//
//IMPERIUM
$LNG['lv_imperium_title']					= 'Podgląd imperium';
$LNG['lv_planet']							= 'Planeta';
$LNG['lv_name']								= 'Nazwa';
$LNG['lv_coords']							= 'Koordynaty';
$LNG['lv_fields']							= 'Pola';
$LNG['lv_resources']						= 'Zasoby';
$LNG['lv_buildings']						= 'Budynki';
$LNG['lv_technology']						= 'Badania';
$LNG['lv_ships']							= 'Flota';
$LNG['lv_defenses']							= 'Obrona';
$LNG['lv_total']							= 'Łącznie';

//----------------------------------------------------------------------------//
//FLEET - FLEET1 - FLEET2 - FLEET3 - FLEETACS - FLEETSHORTCUTS
$LNG['fl_returning']						= 'Flota na Planete';
$LNG['fl_onway']							= 'Flota z Planety';

$LNG['fl_r']								= '(R)';
$LNG['fl_a']								= '(A)';
$LNG['fl_send_back']						= 'Zawróć';
$LNG['fl_acs']								= 'ACS';
$LNG['fl_no_more_slots']					= 'wszystkie sloty floty w użyciu';
$LNG['fl_speed_title']						= 'Prędkość: ';
$LNG['fl_continue']							= 'Dalej';
$LNG['fl_no_ships']							= 'Brak dostępnych statków';
$LNG['fl_remove_all_ships']					= 'Brak statków';
$LNG['fl_select_all_ships']					= 'Wszystkie statki';
$LNG['fl_fleets']							= 'Floty';
$LNG['fl_expeditions']						= 'Ekspedycje';
$LNG['fl_number']							= 'ID';
$LNG['fl_mission']							= 'Misja';
$LNG['fl_ammount']							= 'Statki (łącznie)';
$LNG['fl_beginning']						= 'Start';
$LNG['fl_departure']						= 'Przylot (cel)';
$LNG['fl_destiny']							= 'Przeznacznie';
$LNG['fl_objective']						= 'Powrót na planetę';
$LNG['fl_arrival']							= 'Przylot (powrót)';
$LNG['fl_info_detail']						= 'Szczególy floty';
$LNG['fl_order']							= 'Misja';
$LNG['fl_new_mission_title']				= 'Nowa misja: Wybierz flote';
$LNG['fl_ship_type']						= 'Typ statków';
$LNG['fl_ship_available']					= 'Dostępne';



$LNG['fl_planet_shortcut']					= '(P)';
$LNG['fl_debris_shortcut']					= '(D)';
$LNG['fl_moon_shortcut']					= '(M)';
$LNG['fl_no_shortcuts']						= 'Brak dostępnego skrutu';
$LNG['fl_register_shorcut']					= 'Stwórz';
$LNG['fl_shortcuts']						= 'Skróty';
$LNG['fl_dlte_shortcut']					= 'Usuń';
$LNG['fl_shortcut_add']						= 'Dodaj skrót';
$LNG['fl_shortcut_edition']					= 'Edytuj skrót';
$LNG['fl_shortcut_save']					= 'Zapisz skrót';
$LNG['fl_shortcut_saved']					= 'Zapisane!';
$LNG['fl_no_colony']						= 'Brak kolonii';
$LNG['fl_send_fleet']						= 'Wyślij flote';
$LNG['fl_fleet_speed']						= 'Prędkość';
$LNG['fl_distance']							= 'Dystans (Lata świetlne)';
$LNG['fl_flying_time']						= 'Czas lotu (w jedną stronę)';
$LNG['fl_flying_arrival']					= 'Przybycie do celu';
$LNG['fl_flying_return']					= 'Przybycie spowrotem';
$LNG['fl_fuel_consumption']					= 'Zużycie paliwa';
$LNG['fl_max_speed']						= 'Prędkość lotu';
$LNG['fl_cargo_capacity']					= 'Pojemność ładowni';
$LNG['fl_shortcut']							= 'Skróty';
$LNG['fl_shortcut_name']					= 'Nazwa';
$LNG['fl_my_planets']						= 'Moja planeta';
$LNG['fl_acs_title']						= 'ACS Atak';
$LNG['fl_hold_time']						= 'Czas postoju';
$LNG['fl_resources']						= 'Zasoby';
$LNG['fl_max']								= 'max';
$LNG['fl_hours']							= 'Godzina(y)';
$LNG['fl_resources_left']					= 'Pozostało';
$LNG['fl_all_resources']					= 'Załaduj max zasobów';
$LNG['fl_empty_target']						= 'Brak dostępnych misji (Planeta istnieje ?)';
$LNG['fl_expedition_alert_message']			= 'Uwaga, Ekspedycja niebezpieczna, mozesz stracić wysłaną flote!';
$LNG['fl_dm_alert_message']					= 'Bądź ostrożny jeśli %s %s został znaleziony, flota została zniszczona!';
$LNG['fl_vacation_mode_active']				= 'Jesteś w trybie urlopu';
$LNG['fl_expedition_fleets_limit']			= 'Limit ekspedycji osiągnięty!';
$LNG['fl_week_player']						= 'Gracz bardzo słaby!';
$LNG['fl_strong_player']					= 'Gracz bardzo mocny!';
$LNG['fl_in_vacation_player']				= 'Gracz w trybie urlop';

$LNG['fl_multi_alarm']						= 'Multi-Alarm!';
$LNG['fl_no_slots']							= 'Sloty niedostępne!';
$LNG['fl_planet_populed']					= 'Ta planeta jest zajęta!';
$LNG['fl_no_same_alliance']					= 'Ten gracz musi być w twoim sojuszu, lub na liście znajomych!';
$LNG['fl_not_ally_deposit']					= 'Brak depozytu sojuszniczego';
$LNG['fl_deploy_only_your_planets']			= 'Możesz stacjonować tylko na swoich planetach!';
$LNG['fl_fleet_sended']						= 'Flota wysłana';
$LNG['fl_from']								= 'Od';
$LNG['fl_arrival_time']						= 'Czas dolotu';
$LNG['fl_return_time']						= 'Czas powrotu';
$LNG['fl_fleet']							= 'Flota';
$LNG['fl_player']							= 'Gracz ';
$LNG['fl_add_to_attack']					= ' został zaproszony';
$LNG['fl_already_invited']					= ' został już zaproszony.';
$LNG['fl_dont_exist']						= ' nie instnieje.';
$LNG['fl_acs_invitation_message']			= ' zaprasza do udziału w ACS.';
$LNG['fl_acs_invitation_title']				= 'Zaproszenie do acs';
$LNG['fl_sac_of_fleet']						= 'Floty-AKS';
$LNG['fl_modify_sac_name']					= 'AKS-Nazwa';
$LNG['fl_members_invited']					= 'Użytkownik zaproszony';
$LNG['fl_invite_members']					= 'Zaproś innego uzytkownika';
$LNG['fl_simulate']							= 'Udając';
$LNG['fl_bonus']							= 'Bonus';
$LNG['fl_bonus_attack']						= 'Atak';
$LNG['fl_bonus_defensive']					= 'Obrona';
$LNG['fl_bonus_shield']						= 'Osłona';
$LNG['fl_no_empty_derbis']					= 'Pole zniszczeń nie istnieje! ';
$LNG['fl_acs_newname_alphanum']				= 'Nazwa może zawierać tylko cyfry i litery. ';
$LNG['fl_acs_change']						= 'Zmiana';
$LNG['fl_acs_change_name']					= 'Podaj nową nazwe';
$LNG['fl_error_not_avalible']				= 'Planet can not currently be served!';
$LNG['fl_error_empty_derbis']				= 'Brak pola zniszczeń!';
$LNG['fl_error_no_moon']					= 'Brak księżyca!';
$LNG['fl_error_same_planet']				= 'Start i cel to ta sama planeta!';
$LNG['fl_invalid_target']					= 'Nie odpowiedni cel';
$LNG['fl_no_noresource']					= 'Brak zasobów!';
$LNG['fl_no_target']						= 'Nie znaleziono celu';
$LNG['fl_not_all_ship_avalible']			= 'Nie wszystkie statki dostępne.';
$LNG['fl_no_expedition_slot']				= 'Nie możesz wysłać więcej ekspedycji!';
$LNG['fl_invalid_mission']					= 'Błedna misja';
$LNG['fl_bash_protection']					= 'Bash Ochrona';
$LNG['fl_admin_attack']						= 'Nie możesz atakować admina';
$LNG['fl_target_exists']					= 'Cel istnieje';
$LNG['fl_target_not_exists']				= 'Planeta docelowa nie istnieje, ewentualnie nie odkryłeś astrofizyki!';
$LNG['fl_only_planets_colonizable']			= 'Możesz kolonizować tylko planety!';
$LNG['fl_player_is_noob']					= 'Gracz znajduje się pod ochroną!';
$LNG['fl_player_is_strong']					= 'Gracz za mocny!';
$LNG['fl_no_hold_depot']					= 'Na planecie docelowej nie ma depozytu sojuszniczego.';
$LNG['fl_not_enough_deuterium']				= 'Nie masz wystarczającej ilości deuterium.';
$LNG['fl_not_enough_space']					= 'Nie masz tyle miejsca w ładowniach.';
$LNG['fl_hold_time_not_exists']				= 'Nie poprawny czas postoju.';




//----------------------------------------------------------------------------//
//BUILDINGS - RESEARCH - SHIPYARD - DEFENSES
$LNG['bd_dismantle']						= 'Zdemontuj';
$LNG['bd_interrupt']						= 'Przerwij';
$LNG['bd_cancel']							= 'anuluj';
$LNG['bd_working']							= 'Pracuje';
$LNG['bd_build']							= 'Zbuduj';
$LNG['bd_build_next_level']					= 'Rozbuduj na level ';
$LNG['bd_tech']                             = 'Zbadaj';
$LNG['bd_tech_next_level']                  = 'Zbadaj na level ';
$LNG['bd_add_to_list']						= 'Dodaj do kolejki';
$LNG['bd_no_more_fields']					= 'Brak miejsca na planecie!';
$LNG['bd_remaining']						= 'Pozostało:';
$LNG['bd_lab_required']						= 'Musisz zbudować najpierw laboratorium badawcze!';
$LNG['bd_building_lab']						= 'Rozbuduj laboratorium!';
$LNG['bd_max_lvl']							= '(Max. Level: %s)';
$LNG['bd_lvl']								= 'Level';
$LNG['bd_research']							= 'Badania';
$LNG['bd_shipyard_required']				= 'Musisz najpierw zbudować stocznie!';
$LNG['bd_building_shipyard']				= 'Fabryka nanitów lub stocznia jest rozbudowywana!';
$LNG['bd_available']						= 'Dostępne: ';
$LNG['bd_build_ships']						= 'Buduj';
$LNG['bd_protection_shield_only_one']		= 'Tylko jedna moze być zbudowana!';
$LNG['bd_build_defenses']					= 'Buduj';
$LNG['bd_actual_production']				= 'Aktualna produkcja:';
$LNG['bd_completed']						= 'Zbudowana';
$LNG['bd_operating']						= 'W trakcie';
$LNG['bd_continue']							= 'Kontynułuj';
$LNG['bd_price_for_destroy']				= 'Koszt zniszczenia:';
$LNG['bd_ready']							= 'Gotowe';
$LNG['bd_finished']							= 'Skończone';
$LNG['bd_maxlevel']							= 'Maks. Level';
$LNG['bd_on']								= 'on';
$LNG['bd_max_builds']						= 'Max Build Orders [%d]';
$LNG['bd_next_level']						= 'Następny level:';
$LNG['bd_need_engine']						= '<span title=Wymaga style=color:#FF0000>%s</span>';
$LNG['bd_more_engine']						= '<span title=Produkuje style=color:#00FF00>%s</span>';
$LNG['bd_jump_gate_action']					= 'Skocz do';
$LNG['bd_cancel_warning']					= 'Zdemontowanie da ci 60% kosztu budowy!';
$LNG['bd_cancel_send']						= 'Usuń zaznaczone';
$LNG['bd_destroy_time'] 					= 'Czas';
$LNG['bd_max_ships']                        = 'Max';
$LNG['bd_max_ships_long']                   = 'Maksimum jednostek do zbudowania';
$LNG['sys_notenough_money'] 				= 'Na %s <a href="?page=buildings&amp;cp=%d&amp;re=0">[%d:%d:%d]</a> brakło środków do budowy %s. <br> Miałeś, %s %s , %s %s i %s %s. <br> a potrzebowałeś %s %s , %s %s i %s %s.';
$LNG['sys_nomore_level'] 					= 'Próbujesz zniszczyć budynek  ( %s ).';
$LNG['sys_buildlist'] 						= 'Lista budowy';
$LNG['sys_techlist'] 						= 'Lista badań';
$LNG['sys_buildlist_fail'] 					= 'Nie udało się wykonać zadań z listy budowy';


//----------------------------------------------------------------------------//
//RESOURCES
$LNG['rs_amount']							= 'Ilość';
$LNG['rs_lvl']								= 'level';
$LNG['rs_production_on_planet']				= 'Produkacja zasobów na planecie "%s"';
$LNG['rs_basic_income']						= 'Podstawowy przychód';
$LNG['rs_storage_capacity']					= 'Wielkość magazynów';
$LNG['rs_calculate']						= 'Przelicz';
$LNG['rs_sum']								= 'Łącznie:';
$LNG['rs_daily']							= 'Zasobów na dzień:';
$LNG['rs_weekly']							= 'Zasobów na tydzień:';
$LNG['rs_ress_bonus']						= 'Bonus(Officer/DM-Bonus):';

//----------------------------------------------------------------------------//
//OFFICIERS
$LNG['of_recruit']						= 'Zatrudnij';
$LNG['of_max_lvl']						= 'Max. Level';
$LNG['of_offi']								= 'Oficerowie';
$LNG['of_lvl']								= 'Level';
$LNG['of_shop']								= 'Sklepie';
$LNG['of_dm_trade']						= 'Aktualizacje';
$LNG['of_still']							= 'Jeszcze';
$LNG['of_active']							= 'aktywny';



//----------------------------------------------------------------------------//
//TRADER

$LNG['tr_cost_dm_trader']					= 'Opłaty handlarza %s %s!';
$LNG['tr_not_enought']						= 'Nie masz wystarczająco %s.';
$LNG['tr_exchange_done']					= 'Wymiana zakończona';
$LNG['tr_exchange_error']					= 'Brak wystarczającej ilości zasobów ';
$LNG['tr_call_trader']						= 'Handlarz';
$LNG['tr_call_trader_who_buys']				= 'Spytaj handlarza kto kupuje';
$LNG['tr_call_trader_submit']				= 'Wyślij do handlarza';
$LNG['tr_exchange_quota']					= 'Stosunek wymiany to ';
$LNG['tr_sell']								= 'Wymień za';
$LNG['tr_resource']							= 'Zasoby';
$LNG['tr_amount']							= 'Ilość';
$LNG['tr_quota_exchange']					= 'Aktualny kurs';
$LNG['tr_exchange']							= 'Wymień';

//----------------------------------------------------------------------------//
//TECHTREE
$LNG['tt_requirements']						= 'Wymagania';
$LNG['tt_lvl']								= 'Level ';

//----------------------------------------------------------------------------//
//INFOS
$LNG['in_jump_gate_done']					= 'Teleport został użyty, następny skok mozliwy za: ';
$LNG['in_jump_gate_error_data']				= 'Błąd, koordynaty do skoku nieprawidłowe!';
$LNG['in_jump_gate_not_ready_target']		= 'Teleporter na księżycu docelowym jeszcze nie gotowy, skok będzie mozliwy za ';
$LNG['in_jump_gate_doesnt_have_one']		= 'Brak teleportera na księżycu!';
$LNG['in_jump_gate_already_used']			= 'Teleporter został użyty, czas na ładowanie: ';
$LNG['in_jump_gate_available']				= 'dostępny';
$LNG['in_rf_again']    						= 'Szybki ogień przeciwko';
$LNG['in_rf_from']     						= 'Szybki ogień od';
$LNG['in_level']       						= 'Level';
$LNG['in_storage'] 							= 'Miejsce w magazynach';
$LNG['in_prod_p_hour'] 						= 'Produkacja/godzine';
$LNG['in_difference']  						= 'Różnica';
$LNG['in_range']       						= 'Zasięg ';
$LNG['in_title_head']  						= 'Informacje z';
$LNG['in_name']        						= 'Nazwa ';
$LNG['in_struct_pt']   						= 'Punkty strukturalne';
$LNG['in_shield_pt']   						= 'Siła osłony';
$LNG['in_attack_pt']   						= 'Siła ataku';
$LNG['in_capacity']    						= 'Ładowność';
$LNG['in_units']       						= 'Jednostki';
$LNG['in_base_speed'] 						= 'Prędkość bazowa';
$LNG['in_consumption'] 						= 'Zużycie palia (Deuterium)';
$LNG['in_jump_gate_start_moon']				= 'Księżyc startowy';
$LNG['in_jump_gate_finish_moon']			= 'Księżyc docelowy';
$LNG['in_jump_gate_select_ships']			= 'Użyj telportera/ilość statków';
$LNG['in_jump_gate_wait_time']				= 'Następny skok możliwy za: ';
$LNG['in_jump_gate_jump']					= 'Skocz';
$LNG['in_jump_gate_no_target']				= 'Musisz podać cel.';
$LNG['in_destroy']     						= 'Zniszcz:';
$LNG['in_needed']      						= 'Wymagania';
$LNG['in_dest_durati'] 						= 'Czas niszczenia';
$LNG['in_missilestype']   					= 'Rodzaj pocisku';
$LNG['in_missilesamount']    				= 'Ilość pocisków';
$LNG['in_engine'] 							= 'Napęd';
$LNG['in_bonus'] 							= 'Bonus:';
//----------------------------------------------------------------------------//
//MESSAGES
$LNG['mg_type'][0]    						= 'Raport szpiegowski';
$LNG['mg_type'][1]    						= 'Wiadomości uzytkowników';
$LNG['mg_type'][2]   						= 'Wiadomości sojuszu';
$LNG['mg_type'][3]    						= 'Raporty wojenne';
$LNG['mg_type'][4]    						= 'Wiadomości systemowe';
$LNG['mg_type'][5]    						= 'Raporty transportu';
$LNG['mg_type'][15]   						= 'Raporty ekspedycji';
$LNG['mg_type'][50]							= 'Nowości w grze';
$LNG['mg_type'][99]   						= 'Raporty budowy';
$LNG['mg_type'][100]						= 'Zobacz wszystkie wiadomości';
$LNG['mg_type'][999]						= 'Poczta wychodząca';
$LNG['mg_no_subject']						= 'Brak tematu';
$LNG['mg_no_text']							= 'Brak tekstu';
$LNG['mg_msg_sended']						= 'Wiadomość wysłano!';
$LNG['mg_read_marked']						= 'Zaznacz jako przeczytaną';
$LNG['mg_delete_marked']					= 'Usuń zaznaczone wiadomości';
$LNG['mg_read_type_all']					= 'Zaznacz wszystkie w tej kategorii jako przeczytane!';
$LNG['mg_delete_type_all']					= 'Usuń wszystkie wiadomosci tego typu';
$LNG['mg_delete_unmarked']					= 'Usuń wszystkie niezaznaczone wiadomości';
$LNG['mg_read_all']							= 'Zaznacz wszystkie jako przeczytane';
$LNG['mg_delete_all']						= 'Usuń wszystkie';
$LNG['mg_show_only_header_spy_reports']		= 'Pokaż tylko nagłówki raportów szpiegowskich';
$LNG['mg_action']							= 'Akcja';
$LNG['mg_date']								= 'Data';
$LNG['mg_from']								= 'od';
$LNG['mg_to']								= 'do';
$LNG['mg_subject']							= 'Temat';
$LNG['mg_confirm']							= 'Potwierdź';
$LNG['mg_message_title']					= 'Wiadomości';
$LNG['mg_message_type']						= 'Wiadomości typu';
$LNG['mg_total']							= 'Łącznie';
$LNG['mg_game_operators']					= 'Operator gry';
$LNG['mg_error']							= 'Użytkownik nie znaleziony!';
$LNG['mg_overview']							= 'Podgląd';
$LNG['mg_send_new']							= 'Utwórz nową';
$LNG['mg_send_to']							= 'Odbiorca';
$LNG['mg_message']							= 'Wiadomość';
$LNG['mg_characters']						= 'Znaków';
$LNG['mg_send']								= 'Wyślij';
$LNG['mg_game_message']						= 'Game Message';
$LNG['mg_message_send']						= 'Wiadomość wysłano!';
$LNG['mg_empty_text']						= 'Wpisz tekst';
$LNG['mg_answer_to']						= 'Odpowiedz do:';
$LNG['mg_write_mail_to_ops']				= 'Napisz wiadomość do';
$LNG['mg_page']								= 'Strona ';
$LNG['mg_receiver_block_pm']				= 'Odbioraca zablokował prywatne wiadomości.';

//----------------------------------------------------------------------------//
//ALLIANCE

$LNG['al_not_exists']                       = 'Sojusznik nie istnieje.';
$LNG['al_newname_specialchar']				= 'Nazwa sojuszu może się składać tylko z liter i cyfr, pustych znaków lub _, -, .';
$LNG['al_description_message'] 				= 'Wiadomośc opisująca sojusz';
$LNG['al_web_text']							= 'Strona sojuszu';
$LNG['al_request'] 							= 'Podania';
$LNG['al_click_to_send_request'] 			= 'Wyślij podanie do sojuszu';
$LNG['al_tag_required'] 					= 'Brak tagu sojuszu.';
$LNG['al_name_required'] 					= 'Brak nazwy sojuszu.';
$LNG['al_already_exists'] 					= 'Taki sojusz %s już istnieje.';
$LNG['al_created'] 							= 'Sojusz %s został stworzony!';
$LNG['al_continue'] 						= 'dalej';
$LNG['al_alliance_closed'] 					= 'Sojusz nie przyjmuje nowych członków.';
$LNG['al_request_confirmation_message']		= 'Podanie zostało wysłane <br><a href="?page=alliance">wróć</a>';
$LNG['al_default_request_text']				= 'Lider sojuszu nie ustawił przykładowego podania.';
$LNG['al_write_request'] 					= 'Napisz podanie do sojuszu %s';
$LNG['al_request_deleted'] 					= 'Usunołeś twoje podanie. <br> Możesz teraz stworzyć swój sojusz, lub napisać podanie do innego.';
$LNG['al_request_wait_message'] 			= 'Wysłałeś już podanie do tego sojuszu %s <br>';
$LNG['al_delete_request'] 					= 'Usuń podanie';
$LNG['al_founder_cant_leave_alliance'] 		= 'Założyciel nie może opuścić sojuszu.';
$LNG['al_leave_sucess'] 					= 'Opuściłeś sojusz %s !';
$LNG['al_do_you_really_want_to_go_out'] 	= 'Jesteś pewien że chcesz opuścić sojusz %s ?';
$LNG['al_go_out_yes'] 						= 'Tak';
$LNG['al_go_out_no'] 						= 'Nie';
$LNG['al_close_ally'] 						= 'Czy napewno chcesz zrezygnować z sojuszu?';
$LNG['al_kick_player']						= 'Czy napewno chcesz usunąć gracza %s z sojuszu?';
$LNG['al_circular_sended'] 					= "Ogólna wiadomośc wysłana, otzymali ja następujący gracze:";
$LNG['al_all_players'] 						= 'Do wszystkich';
$LNG['al_no_ranks_defined'] 				= 'Brak zdefiniowanych rang.'; 
$LNG['al_request_text']						= 'Tekst podania';
$LNG['al_inside_text']						= 'wewnętrzna wiadomość';
$LNG['al_outside_text']						= 'Wiadomość dla wszystkich';
$LNG['al_transfer_alliance']				= 'Przenieś sojusz';
$LNG['al_disolve_alliance']					= 'Rozwiąż sojusz';
$LNG['al_founder_rank_text']				= 'Założyciel';
$LNG['al_new_member_rank_text']				= 'Nowy członek';
$LNG['al_acept_request']					= 'Akceptuj';
$LNG['al_you_was_acceted']					= 'Zostałeś przyjęty do ';
$LNG['al_hi_the_alliance']					= 'Witaj!<br>Sojusz <b>';
$LNG['al_has_accepted']						= '</b> zaakceptował twoje podanie .<br>Wiadomość założyciela: <br>';
$LNG['al_decline_request']					= 'Odrzuć';
$LNG['al_you_was_declined']					= 'Twoje podanie zostało odrzucone ';
$LNG['al_has_declined']						= '</b> sojusz odrzucił twoje podanie!<br>Wiadomość założyciela: <br>';
$LNG['al_no_requests']						= 'Brak propozycji';
$LNG['al_request_from']						= 'Propozycja od "%s"';
$LNG['al_no_request_pending']				= 'Jest %d podań';
$LNG['al_name']								= 'Nazwa';
$LNG['al_new_name']							= 'Nowa nazwa (3-30 znaków):';
$LNG['al_tag']								= 'tag';
$LNG['al_new_tag']							= 'Nowy tag (3-8 znaków):';
$LNG['al_user_list']						= 'Lista członków';
$LNG['al_users_list']						= 'lista członków (graczy: %d)';
$LNG['al_manage_alliance']					= 'zarządzaj sojuszem';
$LNG['al_send_circular_message']			= 'Wyślij ogólną wiadomość';
$LNG['al_circular_front_text']				= 'Gracz %s napisał:';
$LNG['al_new_requests']						= '%d nowe podanie';
$LNG['al_goto_chat']						= 'Czat sojuszu';
$LNG['al_save']								= 'Zapisz';
$LNG['al_dlte']								= 'Usuń';
$LNG['al_rank_name']						= 'Rank nazwa';
$LNG['al_ok']								= 'OK';
$LNG['al_num']								= 'ID';
$LNG['al_member']							= 'Nazwa';
$LNG['al_request_from_user']				= 'Podanie gracza';
$LNG['al_request_register_time']            = 'Zarejestrowany';
$LNG['al_request_last_onlinetime']          = 'Ostatnia aktywność';
$LNG['al_message']							= 'Wiadomość';
$LNG['al_position']							= 'Rank';
$LNG['al_points']							= 'Punkty';
$LNG['al_coords']							= 'Koordynaty';
$LNG['al_member_since']						= 'Dołączył';
$LNG['al_estate']							= 'Online';
$LNG['al_back']								= 'Wróć';
$LNG['al_actions']							= 'Akcja';
$LNG['al_change_title']						= 'Zmień';
$LNG['al_the_alliance']						= 'sojuszu';
$LNG['al_change_submit']					= 'Zmień';
$LNG['al_reply_to_request']					= 'Odpowiedz na podanie';
$LNG['al_reason']							= 'Odpowiedz';
$LNG['al_characters']						= 'znaków';
$LNG['al_request_list']						= 'Lista podań';
$LNG['al_candidate']						= 'Nazwa';
$LNG['al_request_date']						= 'Data';
$LNG['al_transfer_alliance']				= 'Zrezygnuj/przejmij sojusz?';
$LNG['al_transfer_to']						= 'Przenieś';
$LNG['al_transfer_submit']					= 'Wyślij';
$LNG['al_ally_information']					= 'Informacje o sojuszu';
$LNG['al_ally_info_tag']					= 'Tag';
$LNG['al_ally_info_name']					= 'Nazwa';
$LNG['al_ally_info_members']				= 'Użytkownicy';
$LNG['al_your_request_title']				= 'Twoje podanie';
$LNG['al_applyform_send']					= 'Wyślij';
$LNG['al_applyform_reload']					= 'Odświerz';
$LNG['al_apply_not_exists']					= 'Podanie nie istnieje.';
$LNG['al_circular_send_ciruclar']			= 'Wyślij ogólną wiadomość';
$LNG['al_circular_alliance']               = 'Sojusz ';
$LNG['al_receiver']							= 'Odbiorca';
$LNG['al_circular_send_submit']				= 'Wyślij';
$LNG['al_circular_reset']					= 'Reset';
$LNG['al_alliance']							= 'Sojusze ';
$LNG['al_alliance_make']					= 'Załóż sojusz';
$LNG['al_alliance_search']					= 'Szukaj sojuszu';
$LNG['al_your_ally']						= 'Twój sojusz';
$LNG['al_rank']								= 'Rank';
$LNG['al_web_site']							= 'Strona domowa';
$LNG['al_inside_section']					= 'Strefa wewnętrzna';
$LNG['al_make_alliance']					= 'Załóż sojusz';
$LNG['al_make_ally_tag_required']			= 'Tag sojuszu (3-8 znaków)';
$LNG['al_make_ally_name_required']			= 'Nazwa sojuszu (3-30 znaków)';
$LNG['al_make_submit']						= 'Załóż';
$LNG['al_find_alliances']					= 'Szukaj sojuszu';
$LNG['al_find_text']						= 'Szukaj';
$LNG['al_find_no_alliances']				= 'Nieznaleziono sojuszu!';
$LNG['al_find_submit']						= 'Szukaj';
$LNG['al_manage_ranks']						= 'Zarządzaj rangami';
$LNG['al_manage_members']					= 'Zarządzaj członkami';
$LNG['al_manage_change_tag']				= 'Zmień tag sojuszu';
$LNG['al_manage_change_name']				= 'Zmień nazwe sojuszu';
$LNG['al_texts']							= 'Zarządzaj sojuszami';
$LNG['al_manage_options']					= 'Opcje';
$LNG['al_manage_image']						= 'Logo sojuszu';
$LNG['al_manage_requests']					= 'Podania';
$LNG['al_set_max_members']					= 'Maksymalna ilość sojuszników';
$LNG['al_manage_request_min_points']        = 'Minimalnie punktów';
$LNG['al_manage_diplo']                    	= 'Dyplomacja sojuszu';
$LNG['al_requests_not_allowed']				= 'Niemożliwe (sojusz zamknięty)';
$LNG['al_requests_allowed']					= 'możliwe (sojusz otarty)';
$LNG['al_manage_founder_rank']				= 'Ranga założyciela';
$LNG['al_configura_ranks']					= 'Konfiguruj rangi';
$LNG['al_create_new_rank']					= 'Nowy rank';
$LNG['al_create']							= 'Stwórz';
$LNG['al_legend']							= 'Opis rang';
$LNG['al_legend_disolve_alliance']			= 'Rozwiąż sojusz';
$LNG['al_legend_kick_users']				= 'Wyrzuć członka';
$LNG['al_legend_see_requests']				= 'Pokaż podania';
$LNG['al_legend_see_users_list']			= 'Pokaż liste członków';
$LNG['al_legend_check_requests']			= 'Sprawdź podania';
$LNG['al_legend_admin_alliance']			= 'Zarządzaj sojuszem';
$LNG['al_legend_see_connected_users']		= 'Pokaż status online na liście członków';
$LNG['al_legend_create_circular']			= 'Napisz ogólną wiadomość';
$LNG['al_legend_right_hand']				= 'Prawa reka (konieczne by przenieść range założyciela)';
$LNG['al_requests']							= 'Podania';
$LNG['al_requests_min_points']              = 'od %s Punktów';
$LNG['al_circular_message']					= 'Rundmail';
$LNG['al_leave_alliance']					= 'Opuść sojusz';
$LNG['al_unitsshut']    					= 'Zniszczone jednostki';
$LNG['al_unitsloos']    					= 'Stracone jednostki';
$LNG['al_tfmetall']     					= 'Łączny zlom metal';
$LNG['al_tfkristall']   					= 'Łączny zlom kryształ';
$LNG['al_view_stats']						= 'Statystyki bitew?';
$LNG['al_view_diplo']                      	= 'Dyplomacja?';
$LNG['al_view_events']						= 'Aktualności';







$LNG['al_memberlist_min']					= 'min';
$LNG['al_memberlist_on']					= 'Online';
$LNG['al_memberlist_off']					= 'Offline';
$LNG['al_diplo']                            = 'Dyplomacja';
$LNG['al_no_diplo']							= '-';
$LNG['al_events']							= 'Wydarzenia';
$LNG['al_no_events']						= 'Obecnie brak zdarzeń';
$LNG['al_diplo_level'][1]                   = 'Skrzydło';
$LNG['al_diplo_level'][2]                   = 'Sojusz ';
$LNG['al_diplo_level'][3]                   = 'Handel z sojuszem';
$LNG['al_diplo_level'][4]                   = 'Pakt o braku agresji';
$LNG['al_diplo_level'][5]                   = 'Wojna';
$LNG['al_diplo_level'][6]                   = 'Geheimbündnis';
$LNG['al_diplo_no_entry']                   = '- Brak paktów -';
$LNG['al_diplo_no_accept']                  = '- Brak zapytań -';
$LNG['al_diplo_accept']                    	= 'Przychodzące pakty';
$LNG['al_diplo_accept_send']                = 'Wychodzące pakty';
$LNG['al_diplo_create']                    	= 'Stwórz nowy pakt.';
$LNG['al_diplo_create_done']                = 'Pakt stworzony.';
$LNG['al_diplo_ally']                       = 'Sojusz ';
$LNG['al_diplo_level_des']                  = 'Przymierze';
$LNG['al_diplo_text']                       = 'Tekst';
$LNG['al_diplo_accept_yes']                	= 'Pakt podpisany.';
$LNG['al_diplo_accept_yes_mes']            	= 'Pakt  %s między sojuszami %s i %s został podpisany!';
$LNG['al_diplo_accept_yes_confirm']			= 'Chcesz zaakceptować pakt?';
$LNG['al_diplo_accept_no']                  = 'Pakt odrzucono.';
$LNG['al_diplo_accept_no_mes']              = 'Pakt %s Między sojuszami %s i %s został odrzucony!';
$LNG['al_diplo_accept_no_confirm']			= 'Chcesz odrzucić pakt? ';
$LNG['al_diplo_delete']                    	= 'Rozwiąż pakt.';
$LNG['al_diplo_delete_mes']                	= 'Pakt %s między sojuszami %s i %s  został rozwiązany!';
$LNG['al_diplo_confirm_delete']           	= 'Chcesz rozwiązać pakt ?';
$LNG['al_diplo_ground']                    	= 'Odpowiedź:';
$LNG['al_diplo_ask']                        = 'Przymierze';
$LNG['al_diplo_ask_mes']                    = 'Pakt przymierza (%s) między sojuszami %s i %s.<br>sojusz: %s';
$LNG['al_diplo_war']                        = 'Deklaracja wojny';
$LNG['al_diplo_war_mes']                    = 'Sojusz %s wyzwał sojusz %s !Sojusz %s wyjaśnia. <br>Uzasadnienie:<br>%s<br><br>Informacje: Wojna jest ważna po 24h od ogłoszenia!. Osłona bash zostanie wyłączona po 24h. <br>Więcej informacji znajdziesz tutaj <a href="index.php?page=rules" target="_blank">Zasady</a>.';
$LNG['al_diplo_head']						= 'Dyplomacja';
$LNG['al_diplo_same_alliance']				= 'Nie możesz zawrzeć sojuszu sam ze sobą!';
$LNG['al_diplo_no_alliance']				= 'Brak sojuszu o takiej nazwie %s!';
$LNG['al_diplo_exists']						= 'Stosunki z sojuszem "%s" już są, albo nie zostały jeszcze zatwierdzone!';
$LNG['al_diplo_info']						= '<p>Na tej stronie zarządzasz sojuszem !</p><p>Hier findest du die Erklärung der einzelnen Bündnissarten. [TODO: Link zu FAQ]</p>';
$LNG['al_leave_ally']						= 'Napewno chcesz opuścić sojusz?';
$LNG['al_default_leader_name']				= 'Leader';
$LNG['al_rank_name']						= 'Nazwa';
$LNG['al_rank_desc']['MEMBERLIST']			= 'Zobacz listę członków';
$LNG['al_rank_desc']['ONLINESTATE']			= 'Kto jest online';
$LNG['al_rank_desc']['TRANSFER']			= 'Może zotać liderem';
$LNG['al_rank_desc']['SEEAPPLY']			= 'Zobacz zgłoszenia do sojuszu'; 
$LNG['al_rank_desc']['MANAGEAPPLY']			= 'Praca ze zgłoszeniami';
$LNG['al_rank_desc']['ROUNDMAIL']			= 'Wiadomość wysłano';
$LNG['al_rank_desc']['ADMIN']				= 'Może edytować sojusz';
$LNG['al_rank_desc']['KICK']				= 'Może wyrzucić sojusznika z sojuszu';
$LNG['al_rank_desc']['DIPLOMATIC']			= 'Może zmieniać dyplomację sojuszu';
$LNG['al_rank_desc']['RANKS']				= 'Rangi';
$LNG['al_rank_desc']['MANAGEUSERS']			= 'Może zarządzać członkami';
$LNG['al_rank_desc']['EVENTS']				= 'Kann Ereignisse im internen Bereich sehen';

//----------------------------------------------------------------------------//
//BUDDY
$LNG['bu_request_exists']					= 'Gracz jest już na liście znajomych!';
$LNG['bu_cannot_request_yourself']			= 'Nie możesz pytać samego siebie';
$LNG['bu_request_message']					= 'Wiadomość';
$LNG['bu_player']							= 'Gracz';
$LNG['bu_request_text']						= 'Tekst';
$LNG['bu_characters']						= 'znaków';
$LNG['bu_back']								= 'Wróć';
$LNG['bu_send']								= 'Wyślij';
$LNG['bu_cancel_request']					= 'Anuluj';
$LNG['bu_accept']							= 'Akceptuj';
$LNG['bu_decline']							= 'Odrzuć';
$LNG['bu_connected']						= 'Połączony';
$LNG['bu_minutes']							= ' min';
$LNG['bu_disconnected']						= 'Offline';
$LNG['bu_online']							= 'Online';
$LNG['bu_buddy_list']						= 'Lista znajomych';
$LNG['bu_requests']							= 'Podania';
$LNG['bu_alliance']							= 'Sojusz';
$LNG['bu_coords']							= 'Koordynaty';
$LNG['bu_text']								= 'Tekst';
$LNG['bu_action']							= 'Akcja';
$LNG['bu_my_requests']						= 'Podania';
$LNG['bu_partners']							= 'Znajomi';
$LNG['bu_delete']							= 'usuń';
$LNG['bu_no_request']						= 'Brak wiadomości!';
$LNG['bu_no_buddys']						= 'Brak znajomych!';
$LNG['bu_request_send']						= 'Wiadomość wysłano!';
$LNG['bu_new_request_title']				= 'Dodaj znajomego!';
$LNG['bu_new_request_body']					= 'Witaj %s,<br>%s chce zostać twoim znajomym!';
$LNG['bu_accepted_request_title']			= 'Akceptuj zaproszenie!';
$LNG['bu_accepted_request_body']			= 'Witaj %s,<br>%s otrzymał twoje zaproszenie!';
$LNG['bu_rejected_request_title']			= 'Odrzuć zaproszenie!';
$LNG['bu_rejected_request_body']			= 'Witaj %s,<br>%s niestety odrzucił twoje zaproszenie do znajomych!';

//----------------------------------------------------------------------------//
//NOTES
$LNG['nt_important']						= 'Ważne';
$LNG['nt_normal']							= 'Normalna';
$LNG['nt_unimportant']						= 'Małoważna';
$LNG['nt_create_note']						= 'Stwórz notke';
$LNG['nt_you_dont_have_notes']				= 'Notes niedostępny';
$LNG['nt_notes']							= 'Notes';
$LNG['nt_version']							= 'Version';
$LNG['nt_create_new_note']					= 'Stwórz nowa notke';
$LNG['nt_edit_note']						= 'Edytuj';
$LNG['nt_date_note']						= 'Data';
$LNG['nt_subject_note']						= 'Temat';
$LNG['nt_size_note']						= 'Wielkość';
$LNG['nt_dlte_note']						= 'Usuń';
$LNG['nt_priority']							= 'Priorytet';
$LNG['nt_note']								= 'Notka';
$LNG['nt_characters']						= 'znaków';
$LNG['nt_back']								= 'Wróć';
$LNG['nt_reset']							= 'Reset';
$LNG['nt_save']								= 'Zapisz';
$LNG['nt_no_title']							= 'Brak tytułu';
$LNG['nt_no_text']							= 'Brak tekstu';

//----------------------------------------------------------------------------//
//STATISTICS
$LNG['st_player']							= 'Gracz';
$LNG['st_alliance']							= 'Sojusz';
$LNG['st_points']							= 'Punkty';
$LNG['st_fleets']							= 'Flota';
$LNG['st_researh']							= 'Badania';
$LNG['st_buildings']						= 'Budynki';
$LNG['st_defenses']							= 'Obrona';
$LNG['st_position']							= 'Rank';
$LNG['st_members']							= 'Członków';
$LNG['st_per_member']						= 'Na członka';
$LNG['st_statistics']						= 'Statystyka';
$LNG['st_updated']							= 'Aktualizacja';
$LNG['st_show']								= 'pokaż';
$LNG['st_per']								= 'po';
$LNG['st_in_the_positions']					= 'na pozycji';
$LNG['st_write_message']					= 'Wiadomość';

//----------------------------------------------------------------------------//
//SEARCH
$LNG['sh_tag']								= 'Tag';
$LNG['sh_name']								= 'Nazwa';
$LNG['sh_members']							= 'Członek';
$LNG['sh_points']							= 'Punkty';
$LNG['sh_search_in_the_universe']			= 'Sszukaj w uniwersum';
$LNG['sh_player_name']						= 'Nazwa gracza';
$LNG['sh_planet_name']						= 'Nazwa planety';
$LNG['sh_alliance_tag']						= 'Tag sojuszu';
$LNG['sh_alliance_name']					= 'Nazwa sojuszu';
$LNG['sh_search']							= 'szukaj';
$LNG['sh_write_message']					= 'Wiadomość prywatna';
$LNG['sh_buddy_request']					= 'Zapytanie o znajomego';
$LNG['sh_alliance']							= 'Sojusz';
$LNG['sh_planet']							= 'Planeta';
$LNG['sh_coords']							= 'Pozycja';
$LNG['sh_position']							= 'Rank';
$LNG['sh_loading']							= '(Ładuję...)';

//----------------------------------------------------------------------------//
//OPTIONS
$LNG['op_error']							= 'Błąd';
$LNG['op_cant_activate_vacation_mode']		= 'Jeśli coś budujesz, lub twoje floty są w ruchu nie będziesz mógł aktywować trybu urlop';
$LNG['op_password_changed']					= 'Hasło zmienione<br><a href="index.php" target="_top">Wróć</a>';
$LNG['op_username_changed']					= 'Nazwa użytkownika zmieniona<br><a href="index.php" target="_top">Wróć</a>';
$LNG['op_options_changed']					= 'Zmiany zapisano.<br><a href="game.php?page=options">Wróć</a>';
$LNG['op_vacation_mode_active_message']		= 'Tryb urlop aktywny conajmniej do: ';
$LNG['op_end_vacation_mode']				= 'Koniec trybu urlop';
$LNG['op_save_changes']						= 'Zapisz zmiany';
$LNG['op_admin_title_options']				= 'Opcje możliwe do zarządzania';
$LNG['op_admin_planets_protection']			= 'Ochrona planety';
$LNG['op_user_data']						= 'Dane użytkownika';
$LNG['op_username']							= 'Nazwa użytkownika';
$LNG['op_old_pass']							= 'Stare hasło';
$LNG['op_new_pass']							= 'Nowe hasło (min. 8 znaków)';
$LNG['op_repeat_new_pass']					= 'Nowe hasło (powtórz)';
$LNG['op_email_adress']						= 'Adres emila';
$LNG['op_permanent_email_adress']			= 'Stały adres';
$LNG['op_general_settings']					= 'Opcje';
$LNG['op_sort_planets_by']					= 'Sortuj planety po:';
$LNG['op_sort_kind']						= 'Tryb sortowania:';
$LNG['op_lang']								= 'Język';
$LNG['op_skin_example']						= 'Scieżka do skinu (Np. C:/SG/skins/)';
$LNG['op_show_skin']						= 'Pokaż skin';
$LNG['op_deactivate_ipcheck']				= 'Wyłącz sprawdzanie IP';
$LNG['op_galaxy_settings']					= 'Opcje podglądu galaktyki';
$LNG['op_spy_probes_number']				= 'Liczba sond szpiegowskich';
$LNG['op_toolt_data']						= 'Informacje';
$LNG['op_seconds']							= 'sekundy';
$LNG['op_max_fleets_messages']				= 'Maximum fleet messages';
$LNG['op_show_planetmenu']					= 'Planet widok menu';
$LNG['op_shortcut']							= 'Skróty';
$LNG['op_show']								= 'Pokaż';
$LNG['op_spy']								= 'Szpieguj';
$LNG['op_write_message']					= 'Napisz wiadomość';
$LNG['op_add_to_buddy_list']				= 'Dodaj do znajomych';
$LNG['op_missile_attack']					= 'Atak rakietami';
$LNG['op_send_report']						= 'Wyślij raport';
$LNG['op_vacation_delete_mode']				= 'Tryb urlop/usuń konto';
$LNG['op_activate_vacation_mode']			= 'Aktywuj tryb urlop';
$LNG['op_dlte_account']						= 'Usuń konto';
$LNG['op_email_adress_descrip']				= 'Możesz zmieniać adres tyle razy ile chcesz, po 7 dniach bez zmiany zostanie zapisany na stałe.';
$LNG['op_deactivate_ipcheck_descrip']		= 'IP jeśli aktywne to po zmianie IP, lub gdy do gry zaloguje się kolejna osoba z tym samym ip zostaniesz wylogowany, wyłączenie kontroli Ip jest niewskazane!';
$LNG['op_spy_probes_number_descrip']		= 'Liczba sond wysyłanych bezpośrednio z panelu galaktyka.';
$LNG['op_activate_vacation_mode_descrip']	= 'Tryb urlop podczas długiej nieobecności. By można aktywować nie możesz nic budować, odkrywać, a twoje floty muszą być nieaktywne. Tryb broni przed nowymi aktakami(tzn. że jeśli aktywujesz go podczas wrogiego ataku, to ten atak dojdzie do skutku, nie będzie mozna wysłać następnych). Urlop conajmniej na 2 dni, podczas urlopu produkacja spada do 0!';
$LNG['op_dlte_account_descrip']				= 'Jeśli to zaznaczysz twoje konto zostanie automatycznie usunięte po 7 dniach.';
$LNG['op_need_pass_mail']					= 'By zmienić adres email musisz podać twoje hasło!';
$LNG['op_not_vaild_mail']					= 'Błędny adres email!';
$LNG['op_change_mail_exist']				= 'Ten email %s jest już używany!';
$LNG['op_sort_normal']						= 'Kolejność tworzenia';
$LNG['op_sort_koords']						= 'Koordynaty';
$LNG['op_sort_abc']							= 'Alfabetycznie';
$LNG['op_sort_up']							= 'Rosnąco';
$LNG['op_sort_down']						= 'Malejąco';
$LNG['op_user_name_no_alphanumeric']		= 'Podaj nazwe użytkownika, tylko cyfry i litery!';
$LNG['op_change_name_pro_week']				= 'Możesz zmienić nazwe użytkownika raz w tygodniu';
$LNG['op_change_name_exist']				= 'Taka nazwa %s już istnieje';
$LNG['op_active_build_messages']			= 'Kolejka nowych wiadomości';
$LNG['op_active_spy_messages_mode']			= 'Skrócone raporty szpiegowskie';
$LNG['op_dst_mode']							= 'Czas letni?';
$LNG['op_dst_mode_sel'][0]					= 'Nie';
$LNG['op_dst_mode_sel'][1]					= 'Tak';
$LNG['op_dst_mode_sel'][2]					= 'Automatycznie';
$LNG['op_timezone']							= 'Strefa czasowa';
$LNG['op_block_pm']							= 'Zablokuj prywatne wiadomości od tego użytkownika';

//----------------------------------------------------------------------------//
//BANNED
$LNG['bn_no_players_banned']				= 'Brak zbanowanych graczy';
$LNG['bn_exists']							= 'Łącznie ';
$LNG['bn_players_banned']					= ' graczy zbanowanych';
$LNG['bn_players_banned_list']				= 'Lista zbanowanych graczy';
$LNG['bn_player']							= 'Gracz';
$LNG['bn_reason']							= 'Powód';
$LNG['bn_from']								= 'Od';
$LNG['bn_until']							= 'Do';
$LNG['bn_by']								= 'Przez';
$LNG['bn_writemail']						= 'Mail do %s';

//----------------------------------------------------------------------------//
//class.CheckSession.php

$LNG['css_account_banned_message']			= 'Twoje konto zostało zbanowane! ';
$LNG['css_account_banned_expire']			= 'Jesteś zbanowwany do %s <br><a href="./index.php?page=pranger">Banlist</a>';
$LNG['css_goto_homeside']					= '<a href="./index.php">Strona startowa</a>';
$LNG['css_server_maintrace']				= 'Konserwacja serwera<br><br>Play unanimously at present. <br><br>Powód: %s';

//----------------------------------------------------------------------------//
//class.FlyingFleetsTable.php

$LNG['cff_aproaching']						= 'Flota składa się z ';
$LNG['cff_ships']							= ' jednostki.';
$LNG['cff_no_fleet_data']					= 'Brak informacji o statkach';
$LNG['cff_acs_fleet']						= 'Acs flota';
$LNG['cff_fleet_own']						= 'Flota';
$LNG['cff_fleet_target']					= 'Floty';
$LNG['cff_mission_acs']						= 'Flota  %s z %s %s %s osiągneła %s %s %s. Misja: %s';
$LNG['cff_mission_own_0']					= 'Jedna z twoich %s z %s %s %s osiągnie %s %s %s. Misja: %s';
$LNG['cff_mission_own_1']					= 'Jedna z twoich %s wraca z  %s %s %s na %s %s %s. Misja: %s';
$LNG['cff_mission_own_2']					= 'Jedna z twoich %s z %s %s %s jest a orbicie %s %s %s. Misja: %s';
$LNG['cff_mission_own_mip']					= 'Atak rakietami (%d) z %s %s %s na %s %s %s.';
$LNG['cff_mission_own_expo_0']				= 'Jedna z twoich %s z %s %s %s osiągneła pozycje %s. Misja: %s';
$LNG['cff_mission_own_expo_1']				= 'Jedna z twoich %s wraca z pozycji %s na %s %s %s. Misja: %s';
$LNG['cff_mission_own_expo_2']				= 'Jedna z twoich %s z %s %s %s leci jako ekspedycja na pozycje %s. Misja: %s';
$LNG['cff_mission_own_recy_0']				= 'Jedna z twoich %s z %s %s %s osiągneła pole zniszczeń %s. Misja: %s';
$LNG['cff_mission_own_recy_1']				= 'Jedna z twoich %s wraca z pola zniszczeń %s spowrotem na %s %s %s. Misja: %s';
$LNG['cff_mission_target_bad']				= 'Wroga %s od gracza %s z %s %s %s osiągnie %s %s %s. Misja: %s';
$LNG['cff_mission_target_good']				= 'Wroga %s od gracza %s z %s %s %s osiągnie %s %s %s. Misja: %s';
$LNG['cff_mission_target_stay']				= 'Przyjazna %s od gracza %s z %s %s %s stoi na orbicie %s %s %s. Misja: %s';
$LNG['cff_mission_target_mip']				= 'Atak rakietami (%d) od gracza %s z %s %s %s na %s %s %s.';
//----------------------------------------------------------------------------//
// EXTRA LANGUAGE FUNCTIONS
$LNG['fcm_universe']						= 'Universum';
$LNG['fcm_mainplanet']						= 'Planeta domowa';
$LNG['fcm_planet']							= 'Planeta';
$LNG['fcm_moon']							= 'Księżyc';
$LNG['fcm_info']							= 'Informacje';
$LNG['fcp_colony']							= 'Kolonia';
$LNG['fgp_require']							= 'Potrzebujesz: ';
$LNG['fgf_time']							= 'Czas budowy ';
$LNG['sys_module_inactive']        	 		= 'Moduł nieaktywny';
$LNG['sys_refferal_from']        	 		= 'System';
$LNG['sys_refferal_title']        	 		= 'Bonus dla gracza %s';
$LNG['sys_refferal_text']					= 'Gracz %s zrekrutowany przez ciebie osiągnoł %s punktów.<br><br>Zostałeś wynagrodzony za aktywnego gracza, otrzymujesz %s %s';
$LNG['sys_closed_game']        	 			= 'Gra chwilowo nie dostępna:';
$LNG['spec_mail_inactive_title']  			= '%s - przypomnienie';

//----------------------------------------------------------------------------//
// CombatReport.php
$LNG['cr_lost_contact']						= 'Kontakt z tą flotą został utracony. ';
$LNG['cr_first_round']						= '(Flota została zestrzelona w 1 rundzie.) ';
$LNG['cr_type']								= 'Typ';
$LNG['cr_total']							= 'Łącznie';
$LNG['cr_weapons']							= 'Broń';
$LNG['cr_shields']							= 'Osłona';
$LNG['cr_armor']							= 'Armor';
$LNG['cr_destroyed']						= 'Zniszczona!';


//----------------------------------------------------------------------------//
// FleetAjax.php
$LNG['fa_not_enough_probes']				= 'Brak dostępnych sond';
$LNG['fa_galaxy_not_exist']					= 'Błąd galaktyka nie istnieje';
$LNG['fa_system_not_exist']					= 'Błąd system nie istnieje';
$LNG['fa_planet_not_exist']					= 'Błąd planeta nie istnieje';
$LNG['fa_not_enough_fuel']					= 'Bład nie masz paliwa';
$LNG['fa_no_more_slots']					= 'Bład brak wystarczającej ilości slotów';
$LNG['fa_no_recyclers']						= 'Bład nie masz recyklerów';
$LNG['fa_no_fleetroom']						= 'Błąd brak miejsca na paliwo';
$LNG['fa_mission_not_available']			= 'Błąd misja niedostępna';
$LNG['fa_no_spios']							= 'Błąd brak sond';
$LNG['fa_vacation_mode']					= 'Gracz w trybie urlop';
$LNG['fa_week_player']						= 'gracz za słaby';
$LNG['fa_strong_player']					= 'gracz za silny';
$LNG['fa_not_spy_yourself']					= 'Błąd nie możesz szpiegować samego siebie!';
$LNG['fa_not_attack_yourself']				= 'Błąd nie możesz atakować samego siebie';
$LNG['fa_action_not_allowed']				= 'Błąd akacja niedostępna';
$LNG['fa_vacation_mode_current']			= 'Błąd jesteś w trybie urlop';
$LNG['fa_sending']							= 'Wysłano';

//----------------------------------------------------------------------------//
// MissilesAjax.php
$LNG['ma_silo_level']						= 'Silos Level 4 Wymagany! ';
$LNG['ma_impulse_drive_required']			= 'Napęd impulsowy wymagany';
$LNG['ma_not_send_other_galaxy']			= 'Nie możesz wysłać rakiet do innej galaktyki. ';
$LNG['ma_planet_doesnt_exists']				= 'Planeta nie istnieje. ';
$LNG['ma_wrong_target']						= 'Zły cel';
$LNG['ma_no_missiles']						= 'Brak rakiety';
$LNG['ma_add_missile_number']				= 'Dodaj rakiety! ';
$LNG['ma_misil_launcher']					= 'Wyrzutnia rakiet';
$LNG['ma_small_laser']						= 'Lekki laser';
$LNG['ma_big_laser']						= 'Ciężki laser';
$LNG['ma_gauss_canyon']						= 'Działo Gauss';
$LNG['ma_ionic_canyon']						= 'Działo Jonowe';
$LNG['ma_buster_canyon']					= 'Działo Plasmowe';
$LNG['ma_small_protection_shield']			= 'Mała osłona';
$LNG['ma_big_protection_shield']			= 'Duża osłona';
$LNG['ma_all']								= 'Wszystko';
$LNG['ma_missiles_sended']					= ' Rakiety wybrane. Cel: ';

//----------------------------------------------------------------------------//
// topkb.php
$LNG['tkb_top']                  			= 'Hala sław';
$LNG['tkb_gratz']                  			= 'Gratulacje osiągnołeś top 100 ';
$LNG['tkb_platz']                  			= 'Miejsce';
$LNG['tkb_owners']             				= 'Przeciwnicy';
$LNG['tkb_datum']                  			= 'Data';
$LNG['tkb_units']             				= 'Jednostki';
$LNG['tkb_legende']               		 	= '<b>Legenda: </b>';
$LNG['tkb_gewinner']              		 	= '<b>-Wygrał-</b>';
$LNG['tkb_verlierer']              			= '<b>-Przegrał-</b>';
$LNG['tkb_unentschieden']         			= '<b>-Oba- </b>';
$LNG['tkb_missing']              		  	= '<br>Tego konta już nie ma.';


//----------------------------------------------------------------------------//
// playercard.php
$LNG['pl_overview']  						= 'Strona gracza';
$LNG['pl_name'] 							= 'Nazwa użytkownika';
$LNG['pl_homeplanet'] 						= 'Planeta domowa';
$LNG['pl_ally']     						= 'Sojusz';
$LNG['pl_message']    						= 'Wiadomość';
$LNG['pl_buddy']        					= 'Znajomi';
$LNG['pl_points']      						= 'Punkty';
$LNG['pl_range']         					= 'Rank';
$LNG['pl_builds']     						= 'Budynki';
$LNG['pl_tech']    							= 'Badania';
$LNG['pl_fleet']       						= 'Flota';
$LNG['pl_def']         						= 'Obrona';
$LNG['pl_total']       						= 'Łącznie';
$LNG['pl_fightstats'] 						= 'Statystyka walk';
$LNG['pl_fights']     						= 'Walki';
$LNG['pl_fprocent']       					= 'Ilość walk ';
$LNG['pl_fightwon']  						= 'Wygrał';
$LNG['pl_fightdraw']  						= 'Zremisował';
$LNG['pl_fightlose']  						= 'Przegrał';
$LNG['pl_totalfight']      					= 'Łącznie walk';
$LNG['pl_destroy']    						= '%s zniszczył';
$LNG['pl_unitsshot']    					= 'Zabił jednostek';
$LNG['pl_unitslose']    					= 'Stracił jednostek';
$LNG['pl_dermetal']    						= 'Zebrał metalu';
$LNG['pl_dercrystal']   					= 'Zebrał kryształu';
$LNG['pl_etc']   							= 'Itd. ';
//----------------------------------------------------------------------------//
// Support

$LNG['ti_header'] 							= 'Pomoc techniczna';
$LNG['ti_overview'] 						= 'Powrót do przeglądu';
$LNG['ti_id'] 								= 'Wiadomość';
$LNG['ti_username'] 						= 'Gracz';
$LNG['ti_subject'] 							= 'Temat';
$LNG['ti_status'] 							= 'Status';
$LNG['ti_date'] 							= 'Data';
$LNG['ti_answers'] 							= 'Odpowiedź';
$LNG['ti_close'] 							= 'Zamknij wiadomość';
$LNG['ti_open'] 							= 'Otwórz wiadomość';
$LNG['ti_new'] 								= 'Zgłoś nowy problem';
$LNG['ti_status_open'] 						= 'Otwarty';
$LNG['ti_status_closed'] 					= 'Zamknięty';
$LNG['ti_status_answer'] 					= 'Odpowiedziano';
$LNG['ti_error_closed'] 					= 'Nie możesz odpowiedzieć na Ticket który został zamknięty';
$LNG['ti_admin_open'] 						= 'Wiadomość zostanie otwarta!';
$LNG['ti_admin_close'] 						= 'Wiadomość zostanie zamknięta!';

$LNG['ti_create_info']						= '<p>Pisząc wiadomość do uportu wykaż się jak największą szczegółowością, błąd opisz tak dokładnie jak to tylko możliwe</p>
<p>Dobrze opisany błąd pozwala na szybką identyfikację i uniknięcie czasochłonnego wypytywania, co kiedy gdzie jak....</p>
<p>W wiadomości powinno znaleźć się, co robiłeś, kiedy, jakie akcje były aktywne na koncie, czy trwała budowa, lot flot i wszystko inne co może pomóc!</p>';
$LNG['ti_create_head']						= 'Nowa wiadomość';
$LNG['ti_category']							= 'Kategorie';
$LNG['ti_subject']							= 'Temat';
$LNG['ti_message']							= 'Wiadomość';
$LNG['ti_submit']							= 'Wyślij';
$LNG['ti_read']								= 'Przeczytaj';
$LNG['ti_answer']							= 'Napisz odpowiedź';
$LNG['ti_create']							= 'Wiadomość wysłano o';
$LNG['ti_responded']							= 'Na wiadomość odpowiedziano ';
$LNG['ti_not_exist']						= 'Wiadomość #%d nie istnieje!';
$LNG['ti_from']								= 'z';
$LNG['ti_re']								= 'RE:';

//----------------------------------------------------------------------------//
// Rekorde 

$LNG['rec_players']  						= 'Gracz';
$LNG['rec_level']  							= 'Level';
$LNG['rec_count']   						= 'Ilość';
$LNG['rec_last_update_on']		   			= 'Ostatnia aktualizacja o';

//----------------------------------------------------------------------------//
// BattleSimulator

$LNG['bs_derbis_raport']					= "Potrzebujesz %s %s albo %s %s by zebrać ten złom. "; //??
$LNG['bs_steal_raport']						= "By zebrać łupy potrzebujesz %s %s albo %s %s lub %s %s transportowców."; //??
$LNG['bs_names']							= "Nazwa statku";
$LNG['bs_atter']							= "Ataker";
$LNG['bs_deffer']							= "Obrońca";
$LNG['bs_steal']							= "Zasoby (Obrońca):";
$LNG['bs_techno']							= "Technologia";
$LNG['bs_send']								= "Przelicz";
$LNG['bs_cancel']							= "Reset";
$LNG['bs_wait']								= "Musisz poczekać z następna symulacją 10sek";
$LNG['bs_acs_slot']							= 'ACS-Slot';
$LNG['bs_add_acs_slot']						= 'Dodaj ACS-Slot';
$LNG['bs_reset']							= 'Reset';
//----------------------------------------------------------------------------//
// Fleettrader

$LNG['ft_head']								= 'Handlarz Floty';
$LNG['ft_count']							= 'Ilość';
$LNG['ft_max']								= 'Max';
$LNG['ft_total']							= 'Łącznie';
$LNG['ft_charge']							= 'Zarobek handlarza';
$LNG['ft_absenden']							= 'Wyślij';
$LNG['ft_empty']							= 'Nie masz czym handlować!';

//----------------------------------------------------------------------------//
// Logout
$LNG['lo_title']						= 'Wylogowano, do zobaczenia wkrótce';
$LNG['lo_logout']						= 'Koniec Sesji';
$LNG['lo_redirect']						= 'Przekierowuje';
$LNG['lo_notify']						= 'Zostaniesz przeniesiony za <span id="seconds"> 5 </span> s';
$LNG['lo_continue']						= 'Kliknij tutaj jeśli niechcesz zostać przniesiony';
//----------------------------------------------------------------------------//

// Tutorial 1.7
$LNG['tut_welcome']	 						= 'Welcome to GALAXYZ Tutorial';
$LNG['tut_welcom_desc']						= 'Welcome to GALAXYZ! Are you new here? This tutorial will explain you the main functions of the game.';
$LNG['tut_welcom_desc2']	 				= 'During the development of the game you will be given various tasks for which you will be rewarded when they successfully complete the';
$LNG['tut_welcom_desc3']	 				= 'The sequence of these tasks is random. However, as the contents of several tutorials are complete with each other, we recommend that you follow a predetermined order.';
$LNG['tut_welcom_desc4']	 				= 'To view this page you will appear to the right menu and clicking Tutorial';
$LNG['tut_welcom_desc5']	 				= 'Once you have completed the task will receive more information and the reward for work.';
$LNG['tut_objects']							= 'Tasks';
$LNG['tut_go']	 							= 'Start!';
$LNG['tut_go_to']	 						= 'Go';
$LNG['tut_m1']	 							= 'Task 1';
$LNG['tut_m2']	 							= 'Task 2';
$LNG['tut_m3']	 							= 'Task 3';
$LNG['tut_m4']	 							= 'Task 4';
$LNG['tut_m5']	 							= 'Task 5';
$LNG['tut_m6']	 							= 'Task 6';
$LNG['tut_m7']	 							= 'Task 7';
$LNG['tut_m8']	 							= 'Task 8';
$LNG['tut_m9']	 							= 'Task 9';
$LNG['tut_ready']	 						= '<font color="#00FF00">Complete</font>';
$LNG['tut_not_ready']						= '<font color="red">Incomplete</font>';
$LNG['tut_m1_name']	 						= 'Task 1 - Basic supply';
$LNG['tut_m1_desc']	 						= 'To expand your home planet you first of all, will need enough resources. You can produce these via mines. Secure your basic supply by expanding your metal and crystal mines. Please note that the upkeep of supply buildings use up a lot of energy. You can produce this energy by, for example, using solar power plants.';
$LNG['tut_m1_quest']	 					= 'Upgrade metal mine to level 4';
$LNG['tut_m1_quest2']	 					= 'Upgrade crystal mine to level 2';
$LNG['tut_m1_quest3']	 					= 'Upgrade solar power plant to level 4';
$LNG['tut_m1_quest4']	 					= 'free';
$LNG['tut_m1_quest5']	 					= 'free';
$LNG['tut_m1_gain']	 						= '<font color="orange">Reward : 200 of Dark Matter</font>';
$LNG['tut_m1_ready']	 					= 'You succeeded in completing the mission! Reward: 200 Dark Matter';
$LNG['tut_m2_name']	 						= 'Task 2 - Planet defence';
$LNG['tut_m2_desc']	 						= 'To protect your resources from enemy pillagers, you should think about the expansion of your defence facilities early on. You can, for example, read up about what you need to build a rocket launcher in the rocket launcher techtree. You need deuterium to expand your defence facilities. Hence you should establish a basic production of this resource first.';
$LNG['tut_m2_quest']	 					= 'Upgrade the deuterium synthesizer to level 2';
$LNG['tut_m2_quest2']						= 'Build a robotics factory of level 2';
$LNG['tut_m2_quest3']	 					= 'Build a shipyard of level 1';
$LNG['tut_m2_quest4']	 					= 'Build 10 rocket launcher';
$LNG['tut_m2_quest5']	 					= 'free';
$LNG['tut_m2_gain']	 						= '<font color="orange">Reward : 200 of Dark Matter</font>';
$LNG['tut_m2_ready']	 					= 'You succeeded in completing the mission! Reward: 200 Dark Matter';
$LNG['tut_m3_name']	 						= 'Task 3 - Planet supplies';
$LNG['tut_m3_desc']	 						= 'After the foundations for supply have been laid, you should intensify them. Please always make sure there is enough energy available.';
$LNG['tut_m3_quest']	 					= 'Upgrade your metal mine onto level 10';
$LNG['tut_m3_quest2']	 					= 'Upgrade your crystal mine onto level 8';
$LNG['tut_m3_quest3']	 					= 'Upgrade the deuterium synthesizer to level 5';
$LNG['tut_m3_quest4']						= 'free';
$LNG['tut_m3_quest5']						= 'free';
$LNG['tut_m3_gain']	 						= '<font color="orange">Reward : 200 of Dark Matter</font>';
$LNG['tut_m3_ready']	 					= 'You succeeded in completing the mission! Reward: 200 Dark Matter';
$LNG['tut_m4_name']	 						= 'Task 4 - The first ship';
$LNG['tut_m4_desc']	 						= 'Ships as well as rocket launchers can protect you from opponents. They have the advantage that they can additionally be used for offensive purposes. However, ships and modern defence facilities have to be researched first. You will need a research lab to do that.';
$LNG['tut_m4_quest']	 					= 'Build a research laboratory with level 1';
$LNG['tut_m4_quest2']	 					= 'Upgrade your Shipyard to level 4';
$LNG['tut_m4_quest3']	 					= 'Research the combustion drive on level 2';
$LNG['tut_m4_quest4']	 					= 'Build 5 small cargo';
$LNG['tut_m4_quest5']	 					= 'free';
$LNG['tut_m4_gain']	 						= '<font color="orange">Reward : 200 of Dark Matter</font>';
$LNG['tut_m4_ready']	 					= 'You succeeded in completing the mission! Reward: 200 Dark Matter';
$LNG['tut_m5_name']	 						= 'Task 5 - Information networks';
$LNG['tut_m5_desc']	 						= 'You are not alone in the universe! Information- and contact networks are very important. Those who socialise can rely on help from other players and can find trading partners more easily. A lot of players organise themselves in alliances to reach their targets together.';
$LNG['tut_m5_quest']	 					= 'Become a member of an alliance';
$LNG['tut_m5_quest2']	 					= 'Create a buddy request';
$LNG['tut_m5_quest3']	 					= 'free';
$LNG['tut_m5_quest4']	 					= 'free';
$LNG['tut_m5_quest5']	 					= 'free';
$LNG['tut_m5_gain']							= '<font color="orange">Reward : 400 of Dark Matter</font>';
$LNG['tut_m5_ready']	 					= 'You succeeded in completing the mission! Reward: 400 Dark Matter';
$LNG['tut_m6_name']	 						= 'Task 6 - Resources and devense';
$LNG['tut_m6_desc']	 						= 'The maximum possible prodiction of resources is restricted to the amount of your resources and the maximum load of your storage capacity. To defense your resources, you should build protection shields.';
$LNG['tut_m6_quest']	 					= 'Build a resource storage of metal, cristal and deuterium.';
$LNG['tut_m6_quest2']	 					= 'Build a small protection shield.';
$LNG['tut_m6_quest3']	 					= 'Build a big protection shield.';
$LNG['tut_m6_quest4']	 					= 'free';
$LNG['tut_m6_quest5']	 					= 'free';
$LNG['tut_m6_gain']	 						= '<font color="orange">Reward : 400 of Dark Matter</font>';
$LNG['tut_m6_ready']	 					= 'You succeeded in completing the mission! Reward: 400 Dark Matter';
$LNG['tut_m7_name']	 						= 'Task 7 - Fleet action';
$LNG['tut_m7_desc']	 						= 'Another way to get hold of resources is to pillage foreign planets. However, beware that some planets are very well protected. To find out information about foreign planets, you can spy on them.';
$LNG['tut_m7_quest']						= 'Build 2 spy sonds';
$LNG['tut_m7_quest2']	 					= 'Spy on another player`s planets';
$LNG['tut_m7_quest3']	 					= 'Research spytech to level 2';
$LNG['tut_m7_quest4']	 					= 'free';
$LNG['tut_m7_quest5']	 					= 'free';
$LNG['tut_m7_gain']	 						= '<font color="orange">Reward : 400 of Dark Matter</font>';
$LNG['tut_m7_ready']	 					= 'You succeeded in completing the mission! Reward: 400 Dark Matter';
$LNG['tut_m8_name']	 						= 'Task 8 - Expanding your empire';
$LNG['tut_m8_desc']	 						= 'An emperor is always anxious to expand his empire. You have already laid the foundations for this on your home planet, but at some point it will be completely expanded. Develop new planets early on, to get hold of resources more quickly and to get hold of new building spaces. Through flexible air traffic between the planets, you also have a powerful device to protect your resources from enemy attacks.';
$LNG['tut_m8_quest']	 					= 'Build 20 Colonizer';
$LNG['tut_m8_quest2']	 					= 'Creat a new Colony';
$LNG['tut_m8_quest3']	 					= 'Build 10 big Cargoship';
$LNG['tut_m8_quest4']	 					= 'free';
$LNG['tut_m8_quest5']	 					= 'free';
$LNG['tut_m8_gain']	 						= '<font color="orange">Reward : 1000 of Dark Matter</font>';
$LNG['tut_m8_ready']	 					= 'You succeeded in completing the mission! Reward: 1000 Dark Matter';
$LNG['tut_m9_name']	 						= 'Task 9 - Debris field, Defense and Energie';
$LNG['tut_m9_desc']	 						= 'After fighting in the Orbit, debris fields are formed from metal- and crystal residues from fired ships. The decomposition of this debris offers you an important alternative method to win resources.';
$LNG['tut_m9_quest']	 					= 'Build 25 Recycler';
$LNG['tut_m9_quest2']	 					= 'Dismantle a debris field';
$LNG['tut_m9_quest3']	 					= 'Build 100 Battleships';
$LNG['tut_m9_quest4']	 					= 'Make 2.000 free Energie';
$LNG['tut_m9_quest5']	 					= 'free';
$LNG['tut_m9_gain']	 						= '<font color="orange">Reward : 2000 of Dark Matter</font>';
$LNG['tut_m9_ready']	 					= 'You succeeded in completing the tutorial! Reward: 2000 Dark Matter';
$LNG['tut_compleat']						= 'You succeeded in completing the tutorial!';

// Translated into Polish by Sirgomo . All rights reversed (C) 2012 Updated by alin 20/Sep/2013
