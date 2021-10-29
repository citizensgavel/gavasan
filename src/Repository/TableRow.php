<?php

namespace App\Repository;

/**
 * Table constants.
 */
final class TableRow
{
    //User Table
    public const USER_UID  = 'uid';
    public const USER_USERNAME  = 'username';
    public const USER_EMAIL  = 'email';
    public const USER_TOKEN  = 'token';
    public const USER_PASSWORD  = 'password';
    public const USER_IP_ADDRESS='ip_address';
    public const USER_PROFILE_PIC='profile_pic';
    public const USER_PROFILE_BG='profile_bg';
    public const USER_PLURGED_COUNT  = 'plurged_count';
    public const USER_STATUS='status';
    public const USER_MARIAGE_STATUS='mariage_status';
    public const USER_NAME  = 'name';
    public const USER_PROFILE_PIC_STATUS='profile_pic_status';
    public const USER_CONVERSATION_COUNT  = 'conversation_count';
    public const USER_FEEDS_COUNT  = 'feeds_count';
    public const USER_FIRST_NAME  = 'first_name';
    public const USER_LAST_NAME = 'last_name';
    public const USER_GENDER  = 'gender';
    public const USER_BIO  = 'bio';
    public const USER_ABOUT  = 'about';
    public const USER_BIRTHDAY  = 'birthday';
    public const USER_BIRTHMONTH  = 'birthMonth';
    public const USER_BIRTHYEAR  = 'birthYear';
    public const USER_NATIONALITY  = 'nationality';
    public const USER_STATE  = 'state';
    public const USER_LGA  = 'lga';
    public const USER_PHONE_NUMBER  = 'phone_number';
    public const USER_TIMEZONE  = 'timezone';
    public const USER_PROVIDER  = 'provider';
    public const USER_PROVIDER_ID  = 'provider_id';
    public const USER_GROUP_COUNT  = 'group_count';
    public const USER_CHANNEL_COUNT  = 'channel_count';
    public const USER_LAST_LOGIN  = 'last_login';
    public const USER_PROFILE_BG_POSITION  = 'profile_bg_position';
    public const USER_VERIFIED  = 'verified';
    public const USER_NOTIFICATION_CREATED  = 'notification_created';
    public const USER_FORGOT_CODE  = 'forgot_code';
    public const USER_PHOTOS_COUNT  = 'photos_count';
    public const USER_EMAILNOTIFICATIONS  = 'emailNotifications';
    public const USER_EMAIL_ACTIVATION  = 'email_activation';
    public const USER_CREATED_AT  = 'created_at';

    //User Configurations
    public const USER_CONFIG_ID  = 'con_id';
    public const USER_CONFIG_UID  = 'uid';
    public const USER_CONFIG_LIMITATION  = 'limitations';
    public const USER_CONFIG_FEEDS_PER_PAGE  = 'feeds_per_page';
    public const USER_CONFIG_VISIBILITY  = 'visibility';
    public const USER_CONFIG_LANGUAGE  = 'language';



    //Feeds Table
    public const FEED_ID  = 'feed_id';
    public const FEED_PARENTS  = 'parents';
    public const FEED_IMMEDIATE_PARENT  = 'immediate_parent';
    public const FEED_FEEDCONTENT  = 'feedContent';
    public const FEED_FEEDSCONTENTFILE  = 'feedsContentFile';
    public const FEED_CHUNK = 'chunk';
    public const FEED_UID_FK  = 'uid_fk';
    public const FEED_IP_ADDRESS  = 'ip';
    public const FEED_CREATED  = 'created';
    public const FEED_UPLOADS  = 'uploads';
    public const FEED_LIKE_COUNT  = 'like_count';
    public const FEED_COMMENT_COUNT  = 'comment_count';
    public const FEED_SHARE_COUNT  = 'share_count';
    public const FEED_GROUP_ID_FK  = 'group_id_fk';
    public const FEED_STATUS  = 'status';
    public const FEED_TYPE  = 'post_type';


    //Followers
    public const FOLLOWER_ID  = 'follower_id';
    public const FOLLOWER_USER_ONE  = 'user_one';
    public const FOLLOWER_USER_TWO  = 'user_two';
    public const FOLLOWER_ROLE  = 'role';
    public const FOLLOWER_CREATED  = 'created';


}
