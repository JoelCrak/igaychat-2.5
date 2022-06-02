<?php

$query = '
    query {
        LivePerformers(
        token: "'.get_token().'"
        tokenOverride: { aff_sub: "CRA_999528218_IGCH_TXT",  source: "TS33-999528218", aff_id: "3" }
        pager: { size: 1, page: 1 }
        filters: [
            {key: "system_source_name_clean", value:"streamate", condition:EQUAL},
            { key: "gender", condition: EQUAL, value: "m" }         
          ]
        ) {
        Data {
            performer_uid
            id_src
            age
            name  
            event_stream_url
            is_live    
            room_url        
        }
    }
}';

$arrmodellive = graphql_query('https://api.camshq.info', $query, get_token());?>