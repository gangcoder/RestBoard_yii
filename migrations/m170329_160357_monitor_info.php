<?php
/**
 * 模块5 api 监控信息表
 */

use yii\db\Migration;

class m170329_160357_monitor_info extends Migration
{
    const TABLE = "monitor_info";

    public function up()
    {

    }

    public function down()
    {
        echo "m170329_160357_monitor_info cannot be reverted.\n";

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
