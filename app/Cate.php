<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cate extends Authenticatable
{




    protected $table = 'cate';
    protected $primaryKey = 'cate_id';
    public $timestamps = false;
    protected $guarded = [];

       public function tree()
       {
           $cate = $this->all();
           return $this->getTree($cate, 'cate_name', 'cate_id', 'cate_pid');
       }


    public function getTree($data, $field_name, $field_id = 'id', $field_pid = 'pid', $pid = 0)
    {
        $arr = array();
        foreach ($data as $k => $v) {
            if ($v->$field_pid == $pid) {
                $data[$k]["_" . $field_name] = $data[$k][$field_name];
                $arr[] = $data[$k];
                foreach ($data as $m => $n) {
                    if ($n->$field_pid == $v->$field_id) {
                        $data[$m][$field_name] =  ''.'├─ '.$data[$m][$field_name];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;

    }
}
