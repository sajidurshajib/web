<?php 
class User_table extends CI_Model{
    
    public function createUserTable()
    {   
        $this->load->dbforge();

        $fields = array(
            'blog_id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
            ),
            'blog_title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'unique' => TRUE,
            ),
            'blog_author' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '100',
                    'default' => 'King of Town',
            ),
            'blog_description' => array(
                    'type' => 'TEXT',
                    'null' => TRUE,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('blog_id', TRUE);
        $this->dbforge->create_table('user_data', TRUE);
    }
}