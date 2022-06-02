<?php

$query = '
    query {
        LivePerformers(
        token: "'.get_token().'"
        pager: { size: 30 }
        filters: [  
            {key: "system_source_name_clean", value:"streamate", condition:EQUAL},
            { key: "gender", condition: EQUAL, value: "m" }   
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
        }
    }
}';

$arrmosttrending = graphql_query('https://api.camshq.info', $query, $token);?>