<?php

switch ($post_slug) {
    case 'anal':
        $gender = 'm';
        break;
    case 'ass':
        $gender = 'm';
        break;
	case 'guy':
		$gender = 'm';
		break;
    case 'bdsm':
        $gender = 'm';
        break;
    case 'beard':
        $gender = 'm';
        $condition = '{key:"body_hair", value:"hairy", condition:EQUAL}';
        break;
    case 'bear':
        $gender = 'm';
        $condition = '{key:"body_hair", value:"hairy", condition:EQUAL}';
        break;
    case 'bigass':
        $gender = 'mm';
        $condition = '{key:"body_type", value:"fewextralbs", condition:EXACTMATCH}';
        break;
    case 'bigcock':
        $gender = 'm';
        $condition = '{key:"penis_size", value:"big", condition:EXACTMATCH}';
        break;
    case 'bigdick':
        $gender = 'm';
        $condition = '{key:"penis_size", value:"whoa", condition:EXACTMATCH}';
        break;
    case 'c2c':
        $gender = 'm';
        $condition = '{key:"tags", value:"c2c", condition:EXACTMATCH}';
        $condition2 = '{key:"expertise", value:"c2c", condition:EXACTMATCH}';
        break;
    case 'chubby':
        $gender = 'm';
        $condition = '{key:"body_type", value:"fewextralbs", condition:EXACTMATCH}';
        break;
    case 'cum':
        $gender = 'm';
        $condition = '{key:"tags", value:"horny", condition:EXACTMATCH}';
        break;
    case 'cut':
        $gender = 'm';
        $condition = '{key:"circumcised", value:"cut", condition:EXACTMATCH}';
        break;
    case 'daddy':
        $gender = 'm';
        $condition = '{key:"age", value:"30", condition:GREATER_THAN_EQUAL}';
        $condition2 = ' {key:"age", value:"50", condition:SMALLER_THAN}';
        break;
    case 'dildo':
        $gender = 'm';
        $condition = '{key:"tags", value:"dildo", condition:EXACTMATCH}';
        break;
    case 'dirty':
        $gender = 'm';
        $condition = '{key:"expertise", value:"dirty", condition:EXACTMATCH}';
        break;
    case 'domination':
        $gender = 'm';
        $condition = '{key:"fetishes", value:"domination", condition:EXACTMATCH}';
        break;
    case 'ebony':
        $gender = 'm';
        $condition = '{key:"ethnicity", value:"ebony", condition:EXACTMATCH}';
        break;
    case 'edging':
        $gender = 'm';
        $condition = '{key:"tags", value:"new", condition:EQUAL}';
        break;
    case 'exhibitionist':
        $gender = 'm';
        $condition = '{key:"tags", value:"exhibitionist", condition:EQUAL}';
        break;
    case 'feet':
        $gender = 'm';
        $condition = '{key:"fetishes", value:"feet", condition:EQUAL}';
        break;
    case 'femboy':
        $gender = 'tf2m';
        break;
    case 'findom':
        $gender = 'm';
        $condition = '{key:"fetishes", value:"dominant", condition:CONTAIN}';
        $condition = '{key:"fetishes", value:"submissive", condition:CONTAIN}';
        break;    
    case 'hairy':
        $gender = 'm';
        $condition = '{key:"body_hair", value:"hairy", condition:EQUAL}';
        break;
    case 'hugecock':
        $gender = 'm';
        $condition = '{key:"penis_size", value:"whoa", condition:EQUAL}';
        break;
    case 'humiliation':
        $gender = 'm';
        $condition = '{key:"fetishes", value:"roleplay", condition:EQUAL}';
        break;
    case 'indian':
        $gender = 'm';
        $condition = '{key:"ethnicity", value:"indian", condition:EQUAL}';
        break;
    case 'french':
        $gender = 'm';
        $condition = '{key:"ethnicity", value:"french", condition:EQUAL}';
        break;
    case 'joi':
        $gender = 'm';
        $condition = '{key:"fetishes", value:"joi", condition:EQUAL}';
        break;
    case 'latino': 
        $gender = 'm';
        $condition = '{key:"ethnicity", value:"hispanic", condition:EQUAL}';
        break;
    case 'lovense':
        $gender = 'm';
        $condition2 = '{key:"fetishes", value:"interactivevibe", condition:EXACTMATCH}';
        break;
    case 'master':
        $gender = 'm';
        $condition = '{key:"tags", value:"master", condition:CONTAIN}';
        break;
    case 'mature':
        $gender = 'm';
        $condition = '{key:"age", value:"50", condition:GREATER_THAN_EQUAL}';
        break;
	case 'mistress':
        $gender = 'm';
        $condition = '{key:"fetishes", value:"dominant", condition:EQUAL}';
        break;
    case 'monstercock':
        $gender = 'm';
        $condition = '{key:"penis_size", value:"big", condition:EQUAL}';
        break;
    case 'muscle':
        $gender = 'm';
        $condition = '{key:"body_type", value:"muscular", condition:EQUAL}';
        break;
    case 'panties':
        $gender = 'm';
        $condition = '{key:"fetishes", value:"underwear", condition:EQUAL}';
        break;
    case 'pantyhose':
        $gender = 'm';
        $condition = '{key:"turn_ons", value:"pantyhose", condition:EQUAL}';
        break;
    case 'selfsuck':
        $gender = 'm';
        $condition = '{key:"penis_size", value:"whoa", condition:CONTAIN}';
        break;
    case 'sissy':
        $gender = 'tf2m';
        break;
    case 'skinny':
        $gender = 'm';
        $condition = '{key:"body_type", value:"slim", condition:EQUAL}';
        break;
    case 'smallcock':
        $gender = 'm';
        $condition = '{key:"penis_size", value:"average", condition:EQUAL}';
        break;
    case 'sph':
        $gender = 'm';
        $condition = '{key:"penis_size", value:"average", condition:EQUAL}';
        $condition2 = '{key:"fetishes", value:"roleplay", condition:EQUAL}';
        break;
    case 'straight':
        $gender = 'm';
        $condition = '{key:"sexual_preferences", value:"straight", condition:EQUAL}';
        break;
    case 'gay':
        $gender = 'm';
        $condition = '{key:"sexual_preferences", value:"gay", condition:EQUAL}';
        break;
    case 'submissive':
        $gender = 'm';
        $condition = '{key:"tags", value:"submissive", condition:EQUAL}';
        break;
    case 'tattoo':
        $gender = 'm';
        $condition = '{key:"body_mods", value:"tattoos", condition:CONTAIN}';
        break;
    case 'twink':
        $gender = 'm';
        $condition = '{key:"age", value:"18", condition:GREATER_THAN_EQUAL}';
        $condition2 = ' {key:"age", value:"25", condition:SMALLER_THAN}';
        break;
    case 'uncut':
        $gender = 'm';
        $condition = '{key:"circumcised", value:"uncut", condition:EXACTMATCH}';
        break;
    case 'young':
        $gender = 'm';
        $condition = '{key:"age", value:"18", condition:GREATER_THAN_EQUAL}';
        $condition2 = ' {key:"age", value:"25", condition:SMALLER_THAN}';
        break;
    default:
        $gender = 'm';
        $condition = '';
        $condition2 = ' ';
    }

    $query = '{
        LivePerformers(
            token: "e70d6dc0-e81e-11e8-9951-9d689c105a7e"
            filters: [
                { key: "gender", condition: EQUAL, value: "'.$gender.'" }
                '.$condition.'
                '.$condition2.'
            ]
          ) {
            Pager {
              total
            }
        }
    }';

    $result =  graphql_query('https://api.camshq.info', $query, '05f499b0-0c73-11ea-accc-3f30849a8bc1');
    $onlinemodels = $result["data"]["LivePerformers"]["Pager"]["total"]; 

    if($onlinemodels > 64) {
        $total  = 64;
    } else { 
        $total = $onlinemodels;
        $paged = 0; 
     }
        
    $query = '
    query {
        LivePerformers (
        token: "'.get_token().'"
        pager: { size: '.$total.', page: '.$paged.' }
        filters: [
            { key: "gender", condition: EXACTMATCH, value: "'.$gender.'" }
            '.  $condition .'
          ]
        ) {
        Data {
            performer_uid
            age
            name
            room_url
            countries 
            ethnicity
            bust_size
            language
            eye_color
            pubic_hair
            fetishes
            hair_color
            gender
            height
            weight
            body_type
            sexual_preferences
            profile_image_full_proxy_url
            description
            expertise
            turn_ons
            event_stream_type
            other_infos
            status
            is_live
            tags
            body_hair
            system_source_name_clean      
        }
    }
}';

$arrcategorybyprofil = graphql_query('https://api.camshq.info', $query, '05f499b0-0c73-11ea-accc-3f30849a8bc1$token');

$queryOfflinePerformers = '
    query {
            Performers (
            token: "'.get_token().'"
            pager: { size: 10, page: 1 }
            filters: [
                {key: "system_source_name_clean", value:"streamate", condition:EQUAL},
                {key: "gender", value: "m", condition: EXACTMATCH}
                {key:"penis_size", value:"big", condition:CONTAIN}
                {key:"sexual_preferences", value:"gay", condition:EQUAL}
                {key:"circumcised", value:"cut", condition:EXACTMATCH}
                {key:"age", value:"25", condition:GREATER_THAN_EQUAL}
            ]
            ) {
            Data {
                performer_uid
                age
                name
                room_url
                countries 
                ethnicity
                bust_size
                language
                eye_color
                pubic_hair
                fetishes
                hair_color
                gender
                height
                weight
                body_type
                sexual_preferences
                profile_image_full_proxy_url
                description
                expertise
                turn_ons
                event_stream_type
                other_infos
                status
                is_live
                tags
                body_hair
                system_source_name_clean      
            }
        }
    }';

$Performers = graphql_query('https://api.camshq.info', $queryOfflinePerformers, '05f499b0-0c73-11ea-accc-3f30849a8bc1$token');


$queryEmptyTag = ' query {
    LivePerformers (
    token: "'.get_token().'"
    pager: { size: 10, page: 1 }
    filters: [
        { key: "gender", condition: EXACTMATCH, value: "m" }      ]
    ) {
    Data {
        performer_uid
        age
        name
        room_url
        countries 
        ethnicity
        bust_size
        language
        eye_color
        pubic_hair
        fetishes
        hair_color
        gender
        height
        weight
        body_type
        sexual_preferences
        profile_image_full_proxy_url
        description
        expertise
        turn_ons
        event_stream_type
        other_infos
        status
        is_live
        tags
        body_hair
        system_source_name_clean      
    }
}
}';

$emptyTagModels =  graphql_query('https://api.camshq.info', $queryEmptyTag, '05f499b0-0c73-11ea-accc-3f30849a8bc1');


?>

