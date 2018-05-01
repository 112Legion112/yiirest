<?php

use yii\db\Migration;

/**
 * Class m180501_131430_insert_user
 */
class m180501_131430_insert_user extends Migration
{
    private $data = [];

    public function __construct(array $config = [])
    {
        for ($i = 1; $i <=10; $i++){
            $this->data[] = [
                'name' => 'Name' . $i,
                'email' => 'Name' . $i . '@example.com'
            ];
        }

        parent::__construct($config);
    }


    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        foreach($this->data as $d) {
            $this->insert('user', $d);
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        foreach($this->data as $d) {
            $this->delete('user', $d);
        }
    }
}
