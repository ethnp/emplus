<?php

namespace Fuel\Migrations;

class Create_users_2
{
	public function up()
	{
		\DBUtil::create_table('users_2', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'USR_UID' => array('constraint' => 32, 'type' => 'varchar'),
			'USR_USERNAME' => array('constraint' => 100, 'type' => 'varchar'),
			'USR_PASSWORD' => array('constraint' => 32, 'type' => 'varchar'),
			'USR_FIRSTNAME' => array('constraint' => 50, 'type' => 'varchar'),
			'USR_LASTNAME' => array('constraint' => 50, 'type' => 'varchar'),
			'USR_EMAIL' => array('constraint' => 100, 'type' => 'varchar'),
			'USR_DUE_DATE' => array('type' => 'date'),
			'USR_CREATE_DATE' => array('type' => 'datetime'),
			'USR_UPDATE_DATE' => array('type' => 'datetime'),
			'USR_STATUS' => array('constraint' => 32, 'type' => 'varchar'),
			'USR_COUNTRY' => array('constraint' => 3, 'type' => 'varchar'),
			'USR_CITY' => array('constraint' => 3, 'type' => 'varchar'),
			'USR_LOCATION' => array('constraint' => 3, 'type' => 'varchar'),
			'USR_ADDRESS' => array('constraint' => 255, 'type' => 'varchar'),
			'USR_PHONE' => array('constraint' => 24, 'type' => 'varchar'),
			'USR_FAX' => array('constraint' => 24, 'type' => 'varchar'),
			'USR_CELLULAR' => array('constraint' => 24, 'type' => 'varchar'),
			'USR_ZIP_CODE' => array('constraint' => 16, 'type' => 'varchar'),
			'DEP_UID' => array('constraint' => 32, 'type' => 'varchar'),
			'USR_POSITION' => array('constraint' => 100, 'type' => 'varchar'),
			'USR_RESUME' => array('constraint' => 100, 'type' => 'varchar'),
			'USR_BIRTHDAY' => array('type' => 'date'),
			'USR_ROLE' => array('constraint' => 32, 'type' => 'varchar'),
			'USR_REPORTS_TO' => array('constraint' => 32, 'type' => 'varchar'),
			'USR_REPLACED_BY' => array('constraint' => 32, 'type' => 'varchar'),
			'USR_UX' => array('constraint' => 128, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users_2');
	}
}