<?php
/**
 * app 位置信息表，用于标注api 所在位置信息
 */

use yii\db\Migration;

class m170329_155946_app_info extends Migration
{
    const TABLE = "app_info";

    public function up()
    {

    }

    public function down()
    {
        echo "m170329_155946_app_info cannot be reverted.\n";

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
