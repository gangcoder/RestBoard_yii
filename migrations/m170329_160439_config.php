<?php
/**
 * 额外配置信息
 */

use yii\db\Migration;

class m170329_160439_config extends Migration
{
    const TABLE = "config";

    public function up()
    {

    }

    public function down()
    {
        echo "m170329_160439_config cannot be reverted.\n";

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
