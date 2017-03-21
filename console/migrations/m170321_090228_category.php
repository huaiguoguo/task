<?php

use yii\db\Migration;

class m170321_090228_category extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this->db->driverName === 'mysql'){
            $tableOptions = "CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI ENGINE=InnoDB";
        }

        $this->createTable("{{%category}}", [
            'id'=>$this->primaryKey()->comment("自增id"),
            'category_name'=>$this->string(20)->notNull()->comment("分类的名称"),
            'created_at'=>$this->integer()->notNull()->unsigned()->comment("创建时间"),
            'updated_at'=>$this->integer()->notNull()->unsigned()->comment("更新时间")
        ], $tableOptions);
    }



    public function down()
    {
        echo "m170321_090228_category cannot be reverted.\n";

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
