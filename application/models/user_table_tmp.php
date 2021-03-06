<?php 
class User_table_tmp extends CI_Model{
    
    public function createUserTableTmp()
    {   
        $this->load->dbforge();

        $fields = array(
            'primary_id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
            ),
            'full_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '200',
            ),
            'email' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '100',
            ),
            'password' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '200',
            ),
            'university_id' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
            ),
            'department' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
            ),
            
            'batch' => array(
                    'type' =>'INT',
                    'constraint' => '5',
            ),
            'gender' => array(
                    'type' => 'INT',
                    'constraint' => '5',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('primary_id', TRUE);
        $this->dbforge->create_table('user_data_tmp', TRUE);
        
        if ($this->db->table_exists('user_data_tmp') )
        {
            echo "'user_data_tmp' table created";
        }
        else
        {
            echo "not";
        }
    }
}