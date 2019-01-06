<?php

use yii\db\Migration;

/**
 * Class m190104_130241_butce
 */
class m190104_130241_butce extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('butcee', [
            'butcee_id' => $this->primaryKey(),
            'butcee_companyname' => $this->string(255)->notNull(),
            'butcee_income' => $this->integer()->notNull(),
            'butcee_expense' => $this->integer()->notNull(),
        
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'); 

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_130241_butce cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190104_130241_butce cannot be reverted.\n";

        return false;
    }
    */
}
