<?php

use yii\db\Schema;
use yii\db\Migration;

class m141104_114809_admin_user extends Migration
{
    public function safeUp()
    {
        $this->createTable('admin_user', [
            'id' => $this->primaryKey(),
            'firstname' => $this->string(255),
            'lastname' => $this->string(255),
            'title' => $this->smallInteger(1),
            'email' => $this->string(12)->notNull()->unique(),
            'password' => $this->string(255),
            'password_salt' => $this->string(255),
            'auth_token' => $this->string(255),
            'is_deleted' => $this->boolean()->defaultValue(0),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('admin_user');
    }
}
