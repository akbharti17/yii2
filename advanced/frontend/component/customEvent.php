<?php

namespace frontend\component;

use yii\base\Component;

class CustomEvent extends Component
{
    const EVENT = 'data';
    public function data($data)
    {
        echo $data->data . "<br>";
    }

    public function getdata($data)
    {
        echo $data->data . "<br>";
    }

    function events()
    {
        $this->on(CustomEvent::EVENT, [$this, 'data'], 'first event');
        $this->on(CustomEvent::EVENT, [$this, 'getdata'], 'second event');
        $this->on(CustomEvent::EVENT, function () {
            echo "callback event<br>";
        });
        $this->trigger(CustomEvent::EVENT);
        $this->off(CustomEvent::EVENT, [$this, 'data']);
        $this->on(CustomEvent::EVENT, [$this, 'getdata']);
    }
}
