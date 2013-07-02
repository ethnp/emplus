<?php

class Model_User extends \Orm\Model{

    protected static $_connection='pmwf';

    protected static $_primary_key=array('usr_uid');

    protected static $_properties = array(
        'usr_uid' => array(
            'data_type' => 'varchar',
            'label' => 'User ID',
            'form' => array('type' => false)
        ),
        'usr_username' => array(
            'data_type' => 'varchar',
            'label' => 'Username',
            'validation' => array('required', 'min_length' => array(5)),
            'form' => array('type' => 'text')
        ),
        'usr_password' => array(
            'data_type' => 'varchar',
            'label' => 'Password',
            'form' => array('type' => false)
        ),
        'usr_firstname' => array(
            'data_type' => 'varchar',
            'label' => 'First Name',
            'validation' => array('required', 'min_length' => array(2)),
            'form' => array('type' => 'text')
        ),
        'usr_lastname' => array(
            'data_type' => 'varchar',
            'label' => 'Last Name',
            'validation' => array('required', 'min_length' => array(2)),
            'form' => array('type' => 'text')
        ),
        'usr_email' => array(
            'data_type' => 'varchar',
            'label' => 'Email Address',
            'validation' => array('required', 'valid_email'),
            'form' => array('type' => 'email')
        ),
        'usr_due_date' => array(
            'data_type' => 'date',
            'label' => 'Expire Date',
            'form' => array('type' => false)
        ),
        'usr_create_date' => array(
            'data_type' => 'datetime',
            'label' => 'Create Date',
            'form' => array('type' => false)
        ),
        'usr_update_date' => array(
            'data_type' => 'datetime',
            'label' => 'Update Date',
            'form' => array('type' => false)
        ),
        'usr_status' => array(
            'data_type' => 'varchar',
            'label' => 'Status',
            'form' => array('type' => false)
        ),
        'usr_country' => array(
            'data_type' => 'varchar',
            'label' => 'Country',
            'form' => array('type' => 'text')
        ),
        'usr_city' => array(
            'data_type' => 'varchar',
            'label' => 'City',
            'form' => array('type' => 'text')
        ),
        'usr_location' => array(
            'data_type' => 'varchar',
            'label' => 'Location',
            'form' => array('type' => 'text')
        ),
        'usr_address' => array(
            'data_type' => 'varchar',
            'label' => 'Address',
            'form' => array('type' => 'text')
        ),
        'usr_phone' => array(
            'data_type' => 'varchar',
            'label' => 'Landline',
            'form' => array('type' => 'number')
        ),
        'usr_fax' => array(
            'data_type' => 'varchar',
            'label' => 'Fax',
            'form' => array('type' => 'number')
        ),
        'usr_cellular' => array(
            'data_type' => 'varchar',
            'label' => 'Cellular',
            'validation' => array('required', 'min_length' => array(12)),
            'form' => array('type' => 'number')
        ),
        'usr_zip_code' => array(
            'data_type' => 'varchar',
            'label' => 'Zip Code',
            'form' => array('type' => 'text')
        ),
        'dep_uid' => array(
            'data_type' => 'varchar',
            'label' => 'Department ID',
            'form' => array('type' => false)
        ),
        'usr_position'  => array(
            'data_type' => 'varchar',
            'label' => 'Position',
            'form' => array('type' => false)
        ),
        'usr_resume' => array(
            'data_type' => 'varchar',
            'label' => 'Resume',
            'form' => array('type' => false)
        ),
        'usr_birthday' => array(
            'data_type' => 'date',
            'label' => 'Birth Date',
            'form' => array('type' => false)
        ),
        'usr_role' => array(
            'data_type' => 'varchar',
            'label' => 'Role',
            'form' => array('type' => false)
        ),
        'usr_reports_to' => array(
            'data_type' => 'varchar',
            'label' => 'Reports To',
            'form' => array('type' => false)
        ),
        'usr_replaced_by' => array(
            'data_type' => 'varchar',
            'label' => 'Replaced By',
            'form' => array('type' => false)
        ),
        'usr_ux' => array(
            'data_type' => 'varchar',
            'label' => 'Ux',
            'form' => array('type' => false)
        ),
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_update'),
            'mysql_timestamp' => false,
        ),
    );
    protected static $_table_name = 'USERS';

}
