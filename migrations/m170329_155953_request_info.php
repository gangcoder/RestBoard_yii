<?php
/**
 * 模块3
 * 请求信息表
 */

use yii\db\Migration;

class m170329_155953_request_info extends Migration
{
    const TABLE = "request_info";


    public function up()
    {

    }

    public function down()
    {
        echo "m170329_155953_request_info cannot be reverted.\n";

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
