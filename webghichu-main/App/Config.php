<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = '127.0.0.1';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'ql_ghichu';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'long';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '123456';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * Secret key for hashing
     * @var boolean
     */
    const SECRET_KEY = 'long';
    const MAIL_DOMAIN = 'smtp.gmail.com';
    const MAIL_USER = 'long129363@nuce.edu.vn';
    const MAIL_PASSWORD = '123456';
    
    const SESSION_REMEMBER_USER_ID = 'user_id';
    const SESSION_REMEMBER_PAGE = 'return_to';
    const SESSION_REMEMBER_TOKEN = 'remember_me';
    const SESSION_REMEMBER_FLASH = 'flash_notifications';
}
