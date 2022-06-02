
<?php 

$query = '
        query {
            LivePerformers(
            token: "05f499b0-0c73-11ea-accc-3f30849a8bc1"
            tokenOverride: { aff_sub: "CRA_999528218_IGCH_TXT",  source: "TS33-999528218", aff_id: "3", aff_sub2: "KW_BubbleChat" }
            pager: { size: 1, page: 1 }
            filters: [
                {key: "system_source_name_clean", value:"streamate", condition:EQUAL}
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
                profile_image_full_proxy_url             
            }
        }
    }';

    $arrChatModel = graphql_query('https://api.camshq.info', $query, '05f499b0-0c73-11ea-accc-3f30849a8bc1'); 
    $messenger = $arrChatModel["data"]["LivePerformers"]["Data"][0];
    
    
    if($messenger) : ?>
    
    <style>

        #jerkmate-im {
            position: relative;
            z-index: 15;
        }
        #jerkmate-im .im-avatar {
            display: block;
            border: none;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
            border-radius: 10000px;
            width: 36px;
            height: 36px;
            background-size: cover;
            position: relative;
            padding: 0;
        }


        #jerkmate-im #avatar-bubble {
            position: fixed;
            top: 75vh;
            right: -4px;
            width: 60px;
            height: 60px;
            outline: none !important;
            transition: top .4s ease-in-out;
        }


        #jerkmate-im #avatar-bubble::before {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            border-radius: 100000px;
            box-shadow: inset 0 -20px 30px -10px rgba(0, 0, 0, .15)
        }

        #jerkmate-im #avatar-bubble::after {
            content: '2';
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            background: #e10;
            color: #fff;
            font-size: 11px;
            width: 1.6em;
            height: 1.6em;
            line-height: 1.6em;
            font-weight: 700;
            text-align: center;
            vertical-align: middle;
            z-index: 3;
            border-radius: 10000px;
        }

        #jerkmate-im #avatar-bubble .dot {
            width: 1em;
            height: 1em;
            background-color: #00bb00;
            border-radius: 10000px;
            display: block;
            position: absolute;
            top: 44px;
            left: 44px;
            z-index: 3;
        }

        #jerkmate-im #avatar-bubble img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 10000px;
        }

        #jerkmate-im #jerkmate-im-chat {
            position: fixed;
            bottom: 18px;
            right: 18px;
            width: calc(240px + 11vw);
            height: calc((192px + 11vw) * 1.65);
            max-height: calc(100% - 114px);
            background: #fff;
            box-shadow: 0 0 25px rgba(0, 0, 0, .15);
            border-radius: 18px;
            overflow: hidden;
            transform-origin: top right;
            transform: scale(.0000001);
            opacity: 0;
            transition: transform .4s, opacity .4s, top .4s;
            pointer-events: none;
            padding: 0;
            margin: 0;
            top: calc(75vh + 78px);
        }

        #jerkmate-im.jerkmate-im-show-chat #jerkmate-im-chat {
            transform: scale(1);
            opacity: 1;
            pointer-events: all;
        }

        #im-show-chat #jerkmate-im-chat {
            top: calc(100% - (((192px + 11vw) * 1.65) + 18px));
        }

        #jerkmate-im.jerkmate-im-offset.jerkmate-im-show-chat #avatar-bubble {
            top: calc(100% - (((192px + 11vw) * 1.65) + 96px));
        }

        #jerkmate-im-header img {
            width: 100%;
            max-width: 200px;
        }

        #jerkmate-im #jerkmate-im-header {
            background-color: rgb(205, 245, 247);
            display: block;
            position: relative;
            margin: 0;
            padding: 12px 24px;
        }

        #jerkmate-im #jerkmate-im-close {
            float: right;
            border: 0;
            margin-top: -4px;
            margin-right: -15px;
            padding: 0;
            width: 8%;
            outline: none;
            position: relative;
            background: transparent;
        }

        #jerkmate-im #jerkmate-im-close:before {
            content: '';
            padding-top: 100%;
            position: relative;
            display: block;
        }

        #jerkmate-im #jerkmate-im-close svg {
            position: absolute;
            display: block;
            width: 65%;
            height: 65%;
            top: 50%;
            left: 50%;
            fill: #777777;
            transform: translate(-50%, -50%);
            transition: fill .5s;
        }

        #jerkmate-im #jerkmate-im-messages {
            position: relative;
            padding: 0 24px;
            overflow: overlay;
            height: calc(100% - ((192px + 11vw) / 17) * 2.25 - (192px + 11vw) * 0.05190954773869347 - 96px);
        }
        #jerkmate-im #jerkmate-im-messages {
            padding: 0 24px !important;
        }

        #jerkmate-im .jerkmate-im-avatar {
            display: block;
            border: none;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
            border-radius: 10000px;
            width: 36px;
            height: 36px;
            background-size: cover;
            position: relative;
            padding: 0;
        }

        #jerkmate-im #jerkmate-im-chat .jerkmate-im-avatar {
            float: left;
            clear: both;
            margin: 24px 0 0;
        }

        #jerkmate-im #jerkmate-im-cams-widget-ctn {
            width: calc(100% - 56px);
            padding-top: calc((100% - 56px) * 0.75);
            border: 0;
            margin: 24px 0 0;
            float: right;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        #jerkmate-im #jerkmate-im-cams-widget, #jerkmate-im #jerkmate-im-feed-overlay {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 0;
            position: absolute;
            overflow: hidden;
        }

        #jerkmate-im .jerkmate-im-message {
            width: calc(100% - 56px);
            float: right;
            clear: right;
            box-sizing: border-box;
            margin: 12px 0 0;
            border-radius: 15px;
        }

        #jerkmate-im p.jerkmate-im-message {
            background: #f0f0f0;
            padding: .6em 1.2em;
            position: relative;
            overflow: visible;
            font-weight: 500;
            font-size: 1em;
        }

        #jerkmate-im .jerkmate-im-cta {
            font-size: calc((192px + 11vw) / 17);
            border-radius: 7px;
            display: block;
            background-color: rgb(27, 20, 100);
            color: #fff;
            text-align: center;
            padding: .8em 1em;
            text-decoration: none;
            box-sizing: border-box;
            position: absolute;
            bottom: 24px;
            left: 24px;
            right: 24px;
            font-weight: 600;
            text-transform: uppercase;
        }

        #jerkmate-im.jerkmate-im-offset.jerkmate-im-show-chat #jerkmate-im-chat {
            top: calc(100% - (((192px + 11vw) * 1.65) + 18px));
        }

        #jerkmate-im .jerkmate-im-avatar img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            border-radius: 10000px;
        }

        #jerkmate-im .jerkmate-im-avatar {
            display: block;
            border: none;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .5);
            border-radius: 10000px;
            width: 36px;
            height: 36px;
            background-size: cover;
            position: relative;
            padding: 0;
        }


    </style>


    <div id="jerkmate-im">
        <button class="im-avatar" id="avatar-bubble" style="background-image: url('<?php echo $messenger['profile_image_full_proxy_url'];?>')">
            <img src="<?php echo $messenger['profile_image_full_proxy_url'];?>" alt="avatar">
            <span class="dot"></span>
        </button>
        <div id="jerkmate-im-chat">
            <header id="jerkmate-im-header">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-jerkingmen.png" alt="Logo Jerkm">
                <button id="jerkmate-im-close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971" xml:space="preserve">
                    <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                        c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                        C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                        s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z">
                    </path>
                    </svg>
                </button>
            </header>
            <div id="jerkmate-im-messages">
                <a href="<?php echo $messenger['room_url'];?>" target="_blank" class="jerkmate-im-avatar" style="background-image: url(https://cdn.camshq.info/mfc/15224471/profile.jpeg)">
                    <img src="<?php echo $messenger['profile_image_full_proxy_url'];?>" alt="avatar">
                    <span class="dot"></span>
                </a>
                <div id="jerkmate-im-cams-widget-ctn">
                    <iframe id="jerkmate-im-cams-widget" src="<?php echo $messenger['event_stream_url'];?>" scrolling="no"></iframe>
                    <a href="<?php echo $messenger['room_url'];?>"  target="_blank" id="jerkmate-im-feed-overlay"></a>
                </div>
                <a href="<?php echo $messenger['room_url'];?>" class="jerkmate-im-avatar">
                    <img src="<?php echo $messenger['profile_image_full_proxy_url'];?>" alt="avatar">
                    <span class="dot"></span>
                </a>
                <p class="jerkmate-im-message"><?php echo $messenger['name'];?>  is live right now</p>
                <p class="jerkmate-im-message">Enter <?php echo $messenger['name'];?>'s room now to start chatting</p>
            </div>
            <a href="https://t.ajrkm.link/7oyq6a0sg?offer_id=6405&url_id=18292&aff_id=3&aff_sub=CRA_999528218_IGCH_TXT&source=TS33-999528218&aff_sub2=KW_Bubblechat
" target="_blank" class="jerkmate-im-cta">
                Create your account
            </a>
        </div>
    </div>

<?php endif; ?>
