<?php
class CI_Mongo extends Mongo
{
    var $db;

    function CI_Mongo()
    {
        // Fetch CodeIgniter instance
        $ci = get_instance();
        // Load Mongo configuration file
        $ci->load->config('cimongo');

        // Fetch Mongo server and database configuration
        $server = $ci->config->item('mongo_server');
        $dbname = $ci->config->item('e_doc');

        // Initialise Mongo
        if ($server)
        {
            parent::__construct($server);
        }
        else
        {
            parent::__construct();
        }
        $this->db = $this->$dbname;
    }
}