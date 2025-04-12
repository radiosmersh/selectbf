<?
/************************************************
* Config file for select(bf)-Template Set       *
*                                               *
* Template-Name: "Original"                     *
* Author:        tadler                         *
* Last Modified: 16.05.2004                     *
* Version:       0.4                            *
*                                               *
*************************************************/

//Define the name of your primare CSS-File
//start path from "include"-subdir
$TMPL_CFG_CSS = "selectbf.css";

//Define the the grachic that will be used to draw graph-bars
$TMPL_CFG_BAR['left'] = "stats_bar_left.gif";
$TMPL_CFG_BAR['middle'] = "stats_bar_middle.gif";
$TMPL_CFG_BAR['right'] = "stats_bar_right.gif";
$TMPL_CFG_BAR['height'] = "10";
$TMPL_CFG_BAR['maxwidth'] = "100"; 

//Define the graphics for the little player-icons
$TMPL_CFG_PLAYER_IMG[0] = "symbols/soldier_us.gif";
$TMPL_CFG_PLAYER_IMG[1] = "symbols/soldier_ger.gif";
$TMPL_CFG_PLAYER_IMG[2] = "symbols/soldier_brit.gif";
$TMPL_CFG_PLAYER_IMG[3] = "symbols/soldier_jap.gif";
$TMPL_CFG_PLAYER_IMG[4] = "symbols/soldier_rus.gif";

//Define the graphics for the different awards
//start paths from "images"-subdir
$TMPL_CFG_BRONZE_STAR_IMG = "symbols/star_bronze.gif";
$TMPL_CFG_SILVER_STAR_IMG = "symbols/star_silver.gif";
$TMPL_CFG_GOLD_STAR_IMG = "symbols/star_gold.gif";
$TMPL_CFG_TOP_HEAL_IMG = "symbols/top-heal.gif";
$TMPL_CFG_TOP_POINT_IMG = "symbols/top-point.gif";
$TMPL_CFG_TOP_REPAIR_IMG = "symbols/top-repair.gif";
$TMPL_CFG_TOP_SCORE_IMG = "symbols/top-score.gif";
$TMPL_CFG_TOP_ATTACK_IMG = "symbols/top-attack.gif";

//Define the graphics for the different MODs
//please mention the Modname that also appears in the log-files
//start paths from "images"-subdir
$TMPL_CFG_MOD_IMG["bf1942"] = "symbols/mod_BF1942.gif";
$TMPL_CFG_MOD_IMG["DesertCombat"] = "symbols/mod_DC.gif";
$TMPL_CFG_MOD_IMG["xpack1"] = "symbols/mod_Xpack1.gif";
$TMPL_CFG_MOD_IMG["xpack2"] = "symbols/mod_Xpack2.gif";

//Define the graphics for Axis and Allies
//start paths from "images"-subdir
$TMPL_CFG_AXIS_IMG = "symbols/axis_flag.gif";
$TMPL_CFG_ALLIED_IMG = "symbols/allied_flag.gif"; 

//please specify graphics for statsbars for the specific teams
$TMPL_CFG_BAR_TEAMS['height'] = "10";
$TMPL_CFG_BAR_TEAMS['maxwidth'] = "250";
$TMPL_CFG_BAR_TEAMS['axis']['left'] = "stats_bar_left.gif";
$TMPL_CFG_BAR_TEAMS['axis']['middle'] = "stats_bar_middle_axis.gif";
$TMPL_CFG_BAR_TEAMS['axis']['right'] = "stats_bar_right.gif";
$TMPL_CFG_BAR_TEAMS['allies']['left'] = "stats_bar_left.gif";
$TMPL_CFG_BAR_TEAMS['allies']['middle'] = "stats_bar_middle_allies.gif";
$TMPL_CFG_BAR_TEAMS['allies']['right'] = "stats_bar_right.gif";

//now finally speficy the screenshots for the maps that you want to use
//please ALWAYS use the in-log mapname to identify the map, otherweise select(bf)
//will not the able to understand what you mean
//start paths from "images"-subdir
$TMPL_CFG_MAP_IMG["dc_oil_fields"] = "mapscreens/oil-fields.jpg";
$TMPL_CFG_MAP_IMG["guadalcanal"] = "mapscreens/guadalcanal.jpg";
$TMPL_CFG_MAP_IMG["kursk"] = "mapscreens/kursk.jpg";
$TMPL_CFG_MAP_IMG["iwo_jima"] = "mapscreens/iwo-jima.jpg";
$TMPL_CFG_MAP_IMG["dc_lostvillage"] = "mapscreens/lost-village.jpg";
$TMPL_CFG_MAP_IMG["bocage"] = "mapscreens/bocage.jpg";
$TMPL_CFG_MAP_IMG["berlin"] = "mapscreens/berlin.jpg";
$TMPL_CFG_MAP_IMG["battleaxe"] = "mapscreens/battleaxe.jpg";
$TMPL_CFG_MAP_IMG["battle_of_the_bulge"] = "mapscreens/battle-of-the-bulge.jpg";
$TMPL_CFG_MAP_IMG["el_alamein"] = "mapscreens/el-alamein.jpg";
$TMPL_CFG_MAP_IMG["Stalingrad"] = "mapscreens/stalingrad.jpg";
$TMPL_CFG_MAP_IMG["stalingrad"] = "mapscreens/stalingrad.jpg";
$TMPL_CFG_MAP_IMG["gazala"] = "mapscreens/gazala.jpg";
$TMPL_CFG_MAP_IMG["midway"] = "mapscreens/midway.jpg";
$TMPL_CFG_MAP_IMG["omaha_beach"] = "mapscreens/omaha-beach.jpg";
$TMPL_CFG_MAP_IMG["tobruk"] = "mapscreens/tobruk.jpg";
$TMPL_CFG_MAP_IMG["Kharkov"] = "mapscreens/kharkov.jpg";
$TMPL_CFG_MAP_IMG["wake"] = "mapscreens/wake.jpg";
$TMPL_CFG_MAP_IMG["aberdeen"] = "mapscreens/aberdeen.jpg";
$TMPL_CFG_MAP_IMG["market_garden"] = "mapscreens/market-garden.jpg";
$TMPL_CFG_MAP_IMG["battle_of_britain"] = "mapscreens/battle-of-britain.jpg";
$TMPL_CFG_MAP_IMG["dc_al_khafji_docks"] = "mapscreens/al-khafji-docs.jpg";
$TMPL_CFG_MAP_IMG["dc_battle_of_73_easting"] = "mapscreens/battle-of-73-easting.jpg";
$TMPL_CFG_MAP_IMG["dc_medina_ridge"] = "mapscreens/medina-ridge.jpg";
$TMPL_CFG_MAP_IMG["dc_weapon_bunkers"] = "mapscreens/weapon-bunkers.jpg";
$TMPL_CFG_MAP_IMG["inshallah_valley"] = "mapscreens/inshallah-valley.jpg";
$TMPL_CFG_MAP_IMG["road_to_basra"] = "mapscreens/basrahs-edge.jpg";
$TMPL_CFG_MAP_IMG["anzio"] = "mapscreens/anzio.jpg";
$TMPL_CFG_MAP_IMG["baytown"] = "mapscreens/baytown.jpg";
$TMPL_CFG_MAP_IMG["cassino"] = "mapscreens/cassino.jpg";
$TMPL_CFG_MAP_IMG["husky"] = "mapscreens/husky.jpg";
$TMPL_CFG_MAP_IMG["salerno"] = "mapscreens/salerno.jpg";
$TMPL_CFG_MAP_IMG["santo_croce"] = "mapscreens/santa-croce.jpg";
$TMPL_CFG_MAP_IMG["raid_on_agheila"] = "mapscreens/agheila.jpg";
$TMPL_CFG_MAP_IMG["liberation_of_caen"] = "mapscreens/caen.jpg";
$TMPL_CFG_MAP_IMG["hue"] = "mapscreens/hue1968.jpg";
$TMPL_CFG_MAP_IMG["ho_chi_minh_trail"] = "mapscreens/hochiminhtrail-b.jpg";
$TMPL_CFG_MAP_IMG["ia_drang"] = "mapscreens/iadrangvalley-d.jpg";
$TMPL_CFG_MAP_IMG["khe_sahn"] = "mapscreens/siegeofkhesahn-a.jpg";
$TMPL_CFG_MAP_IMG["landing_zone_albany"] = "mapscreens/landingzonealbany-c.jpg";
$TMPL_CFG_MAP_IMG["lang_vei"] = "mapscreens/falloflangvei-d.jpg";
$TMPL_CFG_MAP_IMG["operation_flaming_dart"] = "mapscreens/operationflamingdart-a.jpg";
$TMPL_CFG_MAP_IMG["Operation_Game_Warden"] = "mapscreens/operationgamewarden-a.jpg";
$TMPL_CFG_MAP_IMG["operation_hastings"] = "mapscreens/operationhastings-d.jpg";
$TMPL_CFG_MAP_IMG["quang_tri"] = "mapscreens/quangtri1972-b.jpg";
$TMPL_CFG_MAP_IMG["aberdeen"] = "mapscreens/aberdeen.jpg";
$TMPL_CFG_MAP_IMG["adak_island"] = "mapscreens/adak_island.jpg";
$TMPL_CFG_MAP_IMG["adak_race"] = "mapscreens/adak_race.jpg";
$TMPL_CFG_MAP_IMG["air_raid_alert_-kure-1945"] = "mapscreens/air_raid_alert_-kure-1945.jpg";
$TMPL_CFG_MAP_IMG["alaska-1948"] = "mapscreens/alaska-1948.jpg";
$TMPL_CFG_MAP_IMG["alpenfestung-1945"] = "mapscreens/alpenfestung-1945.jpg";
$TMPL_CFG_MAP_IMG["apennines"] = "mapscreens/apennines.jpg";
$TMPL_CFG_MAP_IMG["arctic_convoy-1942"] = "mapscreens/arctic_convoy-1942.jpg";
$TMPL_CFG_MAP_IMG["arctic_convoy-1942_mod"] = "mapscreens/arctic_convoy-1942_mod.jpg";
$TMPL_CFG_MAP_IMG["arnhem-1944"] = "mapscreens/arnhem-1944.jpg";
$TMPL_CFG_MAP_IMG["a_day_of_zitadelle"] = "mapscreens/a_day_of_zitadelle.jpg";
$TMPL_CFG_MAP_IMG["bastogne-1944"] = "mapscreens/bastogne-1944.jpg";
$TMPL_CFG_MAP_IMG["battle_at_river_don"] = "mapscreens/battle_at_river_don.jpg";
$TMPL_CFG_MAP_IMG["battle_for_ortona-1943"] = "mapscreens/battle_for_ortona-1943.jpg";
$TMPL_CFG_MAP_IMG["battle_of_angaur"] = "mapscreens/battle_of_angaur.jpg";
$TMPL_CFG_MAP_IMG["battle_of_bougainville"] = "mapscreens/battle_of_bougainville.jpg";
$TMPL_CFG_MAP_IMG["battle_of_britain"] = "mapscreens/battle_of_britain.jpg";
$TMPL_CFG_MAP_IMG["battle_of_britain_mod"] = "mapscreens/battle_of_britain_mod.jpg";
$TMPL_CFG_MAP_IMG["battle_of_edson_s_ridge"] = "mapscreens/battle_of_edson_s_ridge.jpg";
$TMPL_CFG_MAP_IMG["battle_of_foy"] = "mapscreens/battle_of_foy.jpg";
$TMPL_CFG_MAP_IMG["battle_of_gela-1943"] = "mapscreens/battle_of_gela-1943.jpg";
$TMPL_CFG_MAP_IMG["battle_of_iwo_jima"] = "mapscreens/battle_of_iwo_jima.jpg";
$TMPL_CFG_MAP_IMG["battle_of_leyte_gulf"] = "mapscreens/battle_of_leyte_gulf.jpg";
$TMPL_CFG_MAP_IMG["battle_of_leyte_gulf_day2"] = "mapscreens/battle_of_leyte_gulf_day2.jpg";
$TMPL_CFG_MAP_IMG["battle_of_luzon"] = "mapscreens/battle_of_luzon.jpg";
$TMPL_CFG_MAP_IMG["battle_of_makin"] = "mapscreens/battle_of_makin.jpg";
$TMPL_CFG_MAP_IMG["battle_of_off_malay"] = "mapscreens/battle_of_off_malay.jpg";
$TMPL_CFG_MAP_IMG["battle_of_orel-1943"] = "mapscreens/battle_of_orel-1943.jpg";
$TMPL_CFG_MAP_IMG["battle_of_pavlov-1942"] = "mapscreens/battle_of_pavlov-1942.jpg";
$TMPL_CFG_MAP_IMG["battle_of_stalingrad"] = "mapscreens/battle_of_stalingrad.jpg";
$TMPL_CFG_MAP_IMG["battle_of_the_bulge"] = "mapscreens/battle_of_the_bulge.jpg";
$TMPL_CFG_MAP_IMG["battle_of_valirisk-1943"] = "mapscreens/battle_of_valirisk-1943.jpg";
$TMPL_CFG_MAP_IMG["battle_over_hokkaido-1945"] = "mapscreens/battle_over_hokkaido-1945.jpg";
$TMPL_CFG_MAP_IMG["berlin-1945"] = "mapscreens/berlin-1945.jpg";
$TMPL_CFG_MAP_IMG["berlin-1945-outskirts"] = "mapscreens/berlin-1945-outskirts.jpg";
$TMPL_CFG_MAP_IMG["berlin-1945-streets"] = "mapscreens/berlin-1945-streets.jpg";
$TMPL_CFG_MAP_IMG["bizerte-1943"] = "mapscreens/bizerte-1943.jpg";
$TMPL_CFG_MAP_IMG["bombing_the_reich-1945"] = "mapscreens/bombing_the_reich-1945.jpg";
$TMPL_CFG_MAP_IMG["breakthrough-1944"] = "mapscreens/breakthrough-1944.jpg";
$TMPL_CFG_MAP_IMG["chartres"] = "mapscreens/chartres.jpg";
$TMPL_CFG_MAP_IMG["counterattack-1940"] = "mapscreens/counterattack-1940.jpg";
$TMPL_CFG_MAP_IMG["cretan_village"] = "mapscreens/cretan_village.jpg";
$TMPL_CFG_MAP_IMG["crete-1941"] = "mapscreens/crete-1941.jpg";
$TMPL_CFG_MAP_IMG["desert_hill"] = "mapscreens/desert_hill.jpg";
$TMPL_CFG_MAP_IMG["desert_hill_day1"] = "mapscreens/desert_hill_day1.jpg";
$TMPL_CFG_MAP_IMG["desert_rose-1942"] = "mapscreens/desert_rose-1942.jpg";
$TMPL_CFG_MAP_IMG["eagles_nest-1945"] = "mapscreens/eagles_nest-1945.jpg";
$TMPL_CFG_MAP_IMG["eagles_nest-1946"] = "mapscreens/eagles_nest-1946.jpg";
$TMPL_CFG_MAP_IMG["earned_in_blood"] = "mapscreens/earned_in_blood.jpg";
$TMPL_CFG_MAP_IMG["eastern_blitz-1939"] = "mapscreens/eastern_blitz-1939.jpg";
$TMPL_CFG_MAP_IMG["el_alamein"] = "mapscreens/el_alamein.jpg";
$TMPL_CFG_MAP_IMG["falaise_pocket-1944"] = "mapscreens/falaise_pocket-1944.jpg";
$TMPL_CFG_MAP_IMG["fall_gelb-1940"] = "mapscreens/fall_gelb-1940.jpg";
$TMPL_CFG_MAP_IMG["fall_of_berlin-1945"] = "mapscreens/fall_of_berlin-1945.jpg";
$TMPL_CFG_MAP_IMG["fall_of_singapore"] = "mapscreens/fall_of_singapore.jpg";
$TMPL_CFG_MAP_IMG["fall_weiss-1939"] = "mapscreens/fall_weiss-1939.jpg";
$TMPL_CFG_MAP_IMG["fht_battle_of_kohima-1944"] = "mapscreens/fht_battle_of_kohima-1944.jpg";
$TMPL_CFG_MAP_IMG["fht_battle_of_mareth_line-1943"] = "mapscreens/fht_battle_of_mareth_line-1943.jpg";
$TMPL_CFG_MAP_IMG["fht_dinant-1940"] = "mapscreens/fht_dinant-1940.jpg";
$TMPL_CFG_MAP_IMG["fht_golf_hotel-1944"] = "mapscreens/fht_golf_hotel-1944.jpg";
$TMPL_CFG_MAP_IMG["fht_hong_kong-1941"] = "mapscreens/fht_hong_kong-1941.jpg";
$TMPL_CFG_MAP_IMG["fht_operation_dracula-1945"] = "mapscreens/fht_operation_dracula-1945.jpg";
$TMPL_CFG_MAP_IMG["fht_operation_longcloth-1943"] = "mapscreens/fht_operation_longcloth-1943.jpg";
$TMPL_CFG_MAP_IMG["fht_pasir_panjang-1942"] = "mapscreens/fht_pasir_panjang-1942.jpg";
$TMPL_CFG_MAP_IMG["fht_sittang_bridge-1942"] = "mapscreens/fht_sittang_bridge-1942.jpg";
$TMPL_CFG_MAP_IMG["fht_the_breaking_point-1940"] = "mapscreens/fht_the_breaking_point-1940.jpg";
$TMPL_CFG_MAP_IMG["gazala"] = "mapscreens/gazala.jpg";
$TMPL_CFG_MAP_IMG["gazaps-1945"] = "mapscreens/gazaps-1945.jpg";
$TMPL_CFG_MAP_IMG["gold_beach-1944"] = "mapscreens/gold_beach-1944.jpg";
$TMPL_CFG_MAP_IMG["guadalcanal"] = "mapscreens/guadalcanal.jpg";
$TMPL_CFG_MAP_IMG["hungary_forest-1945"] = "mapscreens/hungary_forest-1945.jpg";
$TMPL_CFG_MAP_IMG["ilomantsi-1944"] = "mapscreens/ilomantsi-1944.jpg";
$TMPL_CFG_MAP_IMG["invasion_of_the_philippines"] = "mapscreens/invasion_of_the_philippines.jpg";
$TMPL_CFG_MAP_IMG["in_the_hell_of_bocage-1944"] = "mapscreens/in_the_hell_of_bocage-1944.jpg";
$TMPL_CFG_MAP_IMG["iron_monster"] = "mapscreens/iron_monster.jpg";
$TMPL_CFG_MAP_IMG["iwo_jima"] = "mapscreens/iwo_jima.jpg";
$TMPL_CFG_MAP_IMG["juno_beach"] = "mapscreens/juno_beach.jpg";
$TMPL_CFG_MAP_IMG["kakazu_ridge-1945"] = "mapscreens/kakazu_ridge-1945.jpg";
$TMPL_CFG_MAP_IMG["karelia"] = "mapscreens/karelia.jpg";
$TMPL_CFG_MAP_IMG["kasserine_pass-1943"] = "mapscreens/kasserine_pass-1943.jpg";
$TMPL_CFG_MAP_IMG["kharkov_outskirts-1943"] = "mapscreens/kharkov_outskirts-1943.jpg";
$TMPL_CFG_MAP_IMG["kharkov_winter-1941"] = "mapscreens/kharkov_winter-1941.jpg";
$TMPL_CFG_MAP_IMG["kiew"] = "mapscreens/kiew.jpg";
$TMPL_CFG_MAP_IMG["korsun_pocket"] = "mapscreens/korsun_pocket.jpg";
$TMPL_CFG_MAP_IMG["kotabharu"] = "mapscreens/kotabharu.jpg";
$TMPL_CFG_MAP_IMG["kushira"] = "mapscreens/kushira.jpg";
$TMPL_CFG_MAP_IMG["liberation_of_caen"] = "mapscreens/liberation_of_caen.jpg";
$TMPL_CFG_MAP_IMG["manchuria-1945"] = "mapscreens/manchuria-1945.jpg";
$TMPL_CFG_MAP_IMG["meuse_river_line-1944"] = "mapscreens/meuse_river_line-1944.jpg";
$TMPL_CFG_MAP_IMG["midway"] = "mapscreens/midway.jpg";
$TMPL_CFG_MAP_IMG["midway-1942"] = "mapscreens/midway-1942.jpg";
$TMPL_CFG_MAP_IMG["monster_des_stahles"] = "mapscreens/monster_des_stahles.jpg";
$TMPL_CFG_MAP_IMG["monte_cassino-1944"] = "mapscreens/monte_cassino-1944.jpg";
$TMPL_CFG_MAP_IMG["moscow_outskirts-1941"] = "mapscreens/moscow_outskirts-1941.jpg";
$TMPL_CFG_MAP_IMG["naichi-1945"] = "mapscreens/naichi-1945.jpg";
$TMPL_CFG_MAP_IMG["nuenen-1944"] = "mapscreens/nuenen-1944.jpg";
$TMPL_CFG_MAP_IMG["ocean_town"] = "mapscreens/ocean_town.jpg";
$TMPL_CFG_MAP_IMG["omaha_charlie-sector-1944"] = "mapscreens/omaha_charlie-sector-1944.jpg";
$TMPL_CFG_MAP_IMG["operation_a"] = "mapscreens/operation_a.jpg";
$TMPL_CFG_MAP_IMG["operation_coronet-1946"] = "mapscreens/operation_coronet-1946.jpg";
$TMPL_CFG_MAP_IMG["operation_forager"] = "mapscreens/operation_forager.jpg";
$TMPL_CFG_MAP_IMG["operation_goodwood-1944"] = "mapscreens/operation_goodwood-1944.jpg";
$TMPL_CFG_MAP_IMG["operation_hailstone_mod"] = "mapscreens/operation_hailstone_mod.jpg";
$TMPL_CFG_MAP_IMG["operation_kikusui_day1"] = "mapscreens/operation_kikusui_day1.jpg";
$TMPL_CFG_MAP_IMG["operation_kikusui_day2_mod"] = "mapscreens/operation_kikusui_day2_mod.jpg";
$TMPL_CFG_MAP_IMG["operation_lilliput"] = "mapscreens/operation_lilliput.jpg";
$TMPL_CFG_MAP_IMG["operation_nordwind-1944"] = "mapscreens/operation_nordwind-1944.jpg";
$TMPL_CFG_MAP_IMG["operation_rattrap"] = "mapscreens/operation_rattrap.jpg";
$TMPL_CFG_MAP_IMG["operation_springawakening"] = "mapscreens/operation_springawakening.jpg";
$TMPL_CFG_MAP_IMG["operation_varsity"] = "mapscreens/operation_varsity.jpg";
$TMPL_CFG_MAP_IMG["pakfront"] = "mapscreens/pakfront.jpg";
$TMPL_CFG_MAP_IMG["pegasus"] = "mapscreens/pegasus.jpg";
$TMPL_CFG_MAP_IMG["prokhorovka-1943"] = "mapscreens/prokhorovka-1943.jpg";
$TMPL_CFG_MAP_IMG["ramelle_neuville-1944"] = "mapscreens/ramelle_neuville-1944.jpg";
$TMPL_CFG_MAP_IMG["raseiniai"] = "mapscreens/raseiniai.jpg";
$TMPL_CFG_MAP_IMG["reichsbahn-1945"] = "mapscreens/reichsbahn-1945.jpg";
$TMPL_CFG_MAP_IMG["remagen"] = "mapscreens/remagen.jpg";
$TMPL_CFG_MAP_IMG["rheinuebung-1941"] = "mapscreens/rheinuebung-1941.jpg";
$TMPL_CFG_MAP_IMG["saipan-1944"] = "mapscreens/saipan-1944.jpg";
$TMPL_CFG_MAP_IMG["salerno-1943"] = "mapscreens/salerno-1943.jpg";
$TMPL_CFG_MAP_IMG["sand_storm"] = "mapscreens/sand_storm.jpg";
$TMPL_CFG_MAP_IMG["sector318-1944"] = "mapscreens/sector318-1944.jpg";
$TMPL_CFG_MAP_IMG["seelow-heights-1945"] = "mapscreens/seelow-heights-1945.jpg";
$TMPL_CFG_MAP_IMG["siegfried_line-1945"] = "mapscreens/siegfried_line-1945.jpg";
$TMPL_CFG_MAP_IMG["simusyu_to-1945"] = "mapscreens/simusyu_to-1945.jpg";
$TMPL_CFG_MAP_IMG["soletschnogorsk-1941"] = "mapscreens/soletschnogorsk-1941.jpg";
$TMPL_CFG_MAP_IMG["spurning_fate-1945"] = "mapscreens/spurning_fate-1945.jpg";
$TMPL_CFG_MAP_IMG["stalingrad_redsquare"] = "mapscreens/stalingrad_redsquare.jpg";
$TMPL_CFG_MAP_IMG["stalingrad_urban_area-1942"] = "mapscreens/stalingrad_urban_area-1942.jpg";
$TMPL_CFG_MAP_IMG["stashuv_area"] = "mapscreens/stashuv_area.jpg";
$TMPL_CFG_MAP_IMG["suomussalmi-1939"] = "mapscreens/suomussalmi-1939.jpg";
$TMPL_CFG_MAP_IMG["supercharge-1942"] = "mapscreens/supercharge-1942.jpg";
$TMPL_CFG_MAP_IMG["tarawa-1943"] = "mapscreens/tarawa-1943.jpg";
$TMPL_CFG_MAP_IMG["the_attack_on_carentan-1944"] = "mapscreens/the_attack_on_carentan-1944.jpg";
$TMPL_CFG_MAP_IMG["the_forgotten_jungle"] = "mapscreens/the_forgotten_jungle.jpg";
$TMPL_CFG_MAP_IMG["the_great_pursuit"] = "mapscreens/the_great_pursuit.jpg";
$TMPL_CFG_MAP_IMG["the_merville_battery"] = "mapscreens/the_merville_battery.jpg";
$TMPL_CFG_MAP_IMG["the_storm"] = "mapscreens/the_storm.jpg";
$TMPL_CFG_MAP_IMG["tobruk"] = "mapscreens/tobruk.jpg";
$TMPL_CFG_MAP_IMG["todtenbruch-1944"] = "mapscreens/todtenbruch-1944.jpg";
$TMPL_CFG_MAP_IMG["transcarpathia-1944"] = "mapscreens/transcarpathia-1944.jpg";
$TMPL_CFG_MAP_IMG["trois_ponts-1944"] = "mapscreens/trois_ponts-1944.jpg";
$TMPL_CFG_MAP_IMG["tulagi_island"] = "mapscreens/tulagi_island.jpg";
$TMPL_CFG_MAP_IMG["tunis-1943"] = "mapscreens/tunis-1943.jpg";
$TMPL_CFG_MAP_IMG["ural_mountains-1947"] = "mapscreens/ural_mountains-1947.jpg";
$TMPL_CFG_MAP_IMG["wake"] = "mapscreens/wake.jpg";
$TMPL_CFG_MAP_IMG["wake_night"] = "mapscreens/wake_night.jpg";
$TMPL_CFG_MAP_IMG["warsaw_uprising"] = "mapscreens/warsaw_uprising.jpg";
$TMPL_CFG_MAP_IMG["way_to_paris-1946"] = "mapscreens/way_to_paris-1946.jpg";
$TMPL_CFG_MAP_IMG["westminster-1942"] = "mapscreens/westminster-1942.jpg";
$TMPL_CFG_MAP_IMG["westwall-1945"] = "mapscreens/westwall-1945.jpg";
$TMPL_CFG_MAP_IMG["zveroboy"] = "mapscreens/zveroboy.jpg";
?>