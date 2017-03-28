<?php
/**
 * api info 表
 * 对应api info 信息模块
 */

use yii\db\Migration;

class m170328_161915_api_info extends Migration
{
    const TABLE = "api_info";

    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull()->defaultValue('')->comment("接口名"),
            'remarks' => $this->string(250)->notNull()->defaultValue('')->comment("APP 信息"),
            'method' => $this->string(10)->notNull()->defaultValue('GET')->comment("请求方法"),
            'url' => $this->string(150)->notNull()->defaultValue('')->comment("请求地址"),
            'params' => $this->string(250)->notNull()->defaultValue('')->comment("请求参数"),
            'req_header' => $this->text()->notNull()->comment("请求头"),
            'req_body' => $this->text()->notNull()->comment("请求体"),
            'resp_header' => $this->text()->notNull()->comment("响应头"),
            'resp_body' => $this->text()->notNull()->comment("响应体"),
            'create_time' => $this->timestamp()->null()->defaultValue(NULL)->comment("添加时间"),
            'update_time' => $this->timestamp()->null()->defaultValue(NULL)->comment("修改时间"),
            'operator' => $this->string(50)->notNull()->defaultValue('')->comment("添加人"),
        ], "COMMENT='api info 表'");

        // 创建索引
        $this->createIndex('idx_create_time', self::TABLE, 'create_time');
        $this->createIndex('idx_operator', self::TABLE, 'operator');
    }

    public function down()
    {
        // 删除索引
        $this->dropIndex('idx_create_time', self::TABLE);
        $this->dropIndex('idx_operator', self::TABLE);

        // 删除表
        $this->dropTable(self::TABLE);

        echo "m170328_161915_api_info deleted...\n";
        return true;
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
