<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'usr_uid' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_username' => array('constraint' => 100, 'type' => 'varchar'),
			'usr_password' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_firstname' => array('constraint' => 50, 'type' => 'varchar'),
			'usr_lastname' => array('constraint' => 50, 'type' => 'varchar'),
			'usr_email' => array('constraint' => 100, 'type' => 'varchar'),
			'usr_due_date' => array('type' => 'date'),
			'usr_create_data' => array('type' => 'datetime'),
			'usr_update_data' => array('type' => 'datetime'),
			'usr_status' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_country' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_city' => array('constraint' => 3, 'type' => 'varchar'),
			'usr_location' => array('constraint' => 3, 'type' => 'varchar'),
			'usr_address' => array('constraint' => 255, 'type' => 'varchar'),
			'usr_phone' => array('constraint' => 24, 'type' => 'varchar'),
			'usr_fax' => array('constraint' => 24, 'type' => 'varchar'),
			'usr_cellular' => array('constraint' => 24, 'type' => 'varchar'),
			'usr_zip_code' => array('constraint' => 16, 'type' => 'varchar'),
			'dep_uid' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_position' => array('constraint' => 100, 'type' => 'varchar'),
			'usr_resume' => array('constraint' => 100, 'type' => 'varchar'),
			'usr_birthday' => array('type' => 'date'),
			'usr_role' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_reports_to' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_replaced_by' => array('constraint' => 32, 'type' => 'varchar'),
			'usr_ux' => array('constraint' => 128, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}