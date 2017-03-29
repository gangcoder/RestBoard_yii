<?php
/**
 * 模块4
 * 批量测试配置信息
 */

use yii\db\Migration;

class m170329_160345_batch_test_info extends Migration
{
    const TABLE = "batch_test_info";

    public function up()
    {

    }

    public function down()
    {
        echo "m170329_160345_batch_test_info cannot be reverted.\n";

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
