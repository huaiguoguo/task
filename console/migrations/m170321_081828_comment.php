<?php

use yii\db\Migration;

class m170321_081828_comment extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this->db->driverName === 'mysql'){
            $tableOptions = "CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI ENGINE=InnoDB";
        }

        $this->createTable("{{%comment}}", [
            'id'=>$this->primaryKey(),
            'pid'=>$this->integer()->notNull()->unsigned(),
            'content'=>$this->text()->notNull(),
            'created_uid'=>$this->integer()->notNull()->unsigned(),
            'created_at'=>$this->integer()->notNull()->unsigned(),
            'updated_at'=>$this->integer()->notNull()->unsigned()
        ], $tableOptions);

    }

    public function down()
    {
        echo "m170321_081828_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
