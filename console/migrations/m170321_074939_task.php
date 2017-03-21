<?php

use yii\db\Migration;

class m170321_074939_task extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this->db->driverName == "mysql"){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable("{{%task}}",[
            'id'=>$this->primaryKey(),
            'title'=>$this->string(60)->notNull()->unique()->comment("标题"),
            'content'=>$this->text()->notNull()->comment("内容"),
            'catgory_id'=>$this->integer()->notNull()->unsigned()->comment("分类id"),
            'created_uid'=>$this->integer()->notNull()->unsigned()->comment("创建人"),
            'status'=>$this->smallInteger()->notNull()->unsigned()->defaultValue(1)->comment("状态"),
            'created_at'=>$this->integer()->notNull()->unsigned()->comment("创建时间"),
            'updated_at'=>$this->integer()->notNull()->unsigned()->comment("更新时间")
        ], $tableOptions);

        $this->addColumn("{{%task}}", "category_id", $this->integer()->notNull()->unsigned()->comment("分类id"));

    }

    public function down()
    {
        return false;
        $this->dropTable('{{%task}}');
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
