<?php

use yii\db\Schema;
use yii\db\Migration;

class m150323_125407_admin_auth extends Migration
{
    public function up()
    {
        $this->createTable('admin_auth', [
            'id' => $this->primaryKey(),
            'alias_name' => $this->string(60)->notNull(),
            'module_name' => $this->string(60)->notNull(),
            'is_crud' => $this->boolean()->defaultValue(0),
            'route' => $this->string(200),
            'api' => $this->string(200),
        ]);
    }

    public function down()
    {
        $this->dropTable('admin_auth');
    }
}
