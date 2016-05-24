<?php
class Posts extends CI_Controller
{
    function index()
    {
        $result_get = $this->cimongo->where(array('ui'=> '1001.0'))->get("e_users");
        foreach($result_get as $data)
        {
          echo"<pre>";
          print_r($data);
          echo"</pre>";
         }

    }

    function create()
    {
        $post = array('title' => 'Test post');
        $this->mongo->db->posts->insert($post);
        var_dump($post);
    }
}