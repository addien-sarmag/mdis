<?php

class Test extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->_benchmark_mark('test_start');
        log_message('info',session_id() . ' test_start : '. microtime  (true));
    }
    protected function _benchmark_mark($mark) {
        if ($this->config->item('benchmark_active'))
            $this->benchmark->mark($mark);
    }
    protected function _benchmark_elapsed_time($start_mark,$end_mark) {
        if ($this->config->item('benchmark_active'))
            return $this->benchmark->elapsed_time($start_mark, $end_mark);
        return '';
    }
    function index()
    {
        $y = 0;
        $this->_benchmark_mark('loop1_start');
        log_message('info',session_id() . ' loop1_start : '. microtime  (true));
        for ($i = 0 ; $i<=10000;$i++) {
            $y += 5;
        }
        $this->_benchmark_mark('loop1_end');
        log_message('info',session_id() . ' loop1_end : '. microtime  (true));
        log_message('info', session_id() . ' Total Execute Loop1 : ' . $this->_benchmark_elapsed_time('loop1_start', 'loop1_end'));
    }
    public function __destruct()
    {
        $this->_benchmark_mark('test_end');
        
        log_message('info', session_id() . ' Total Execute controller Test : '.$this->_benchmark_elapsed_time('test_start', 'test_end'));
        log_message('info', session_id() . ' test_end : '. microtime  (true));
    }
}