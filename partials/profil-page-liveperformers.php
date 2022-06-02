
<?php
$query = '
    query {
        LivePerformers(
        token: "'.get_token().'"
        tokenOverride: { aff_sub: "CRA_999528218_IGCH_TXT",  source: "TS33-999528218", aff_id: "3" }
        filters: [
            {key: "name", value: "'.$model.'" },
            {key: "system_source_name_clean", value:"streamate", condition:EQUAL},
            {
                key: "gender"
                condition: CONTAIN
                value: "f"
                or: [
                  { key: "gender", condition: CONTAIN, value: "m" }
                  { key: "gender", condition: CONTAIN, value: "t" }
                  { key: "gender", condition: CONTAIN, value: "c" }
                  { key: "gender", condition: CONTAIN, value: "mm" }
                  { key: "gender", condition: CONTAIN, value: "mf" }
                  { key: "gender", condition: CONTAIN, value: "ff" }
                  { key: "gender", condition: CONTAIN, value: "s" }
                  { key: "gender", condition: CONTAIN, value: "g" }
                  { key: "gender", condition: CONTAIN, value: "tm2f" }
                  { key: "gender", condition: CONTAIN, value: "tf2m" }
                ]
              }
          ]
        ) {
        Data {
            performer_uid
            system_source_name_clean
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
            event_stream_url          
        }
    }
}';

$arrprofillive = graphql_query('https://api.camshq.info', $query, $token);?>