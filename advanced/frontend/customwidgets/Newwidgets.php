<?php

namespace  frontend\customwidgets;

use yii;
use yii\base\Widget;

class Newwidgets extends Widget
{

    public $label1;
    public $label2;

    public function init()
    {
        parent::init();
        if ($this->label1 === null && $this->label2 === null) {
            $this->label1 = 'Enter Your first Name';
            $this->label2 = 'Enter Your last Name';
        }
    }

    public function run()
    {
        $html = "
        <form action=''>
        <label>$this->label1</label>
        <p><input type='text' id='fname' name='fname' placeholder='Enter Your $this->label1'></p>
        <label>$this->label2</label>
        <p><input type='text' id='lname' name='lname' placeholder='Enter Your $this->label2'></p>
        <p><input type='button' value='Click' onclick='myFun()'></p>
        </form> 
        
        ";
        return $html;
    }
}
