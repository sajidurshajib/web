<?php 
class Teachers_table extends CI_Model{
    
    public function createTeachersTable()
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
            'user_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
            ),
            'department' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
            ),
            'position' => array(
                    'type' =>'VARCHAR',
                    'constraint' => '50',
            ),
            'gender' => array(
                    'type' => 'INT',
                    'constraint' => '5',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('primary_id', TRUE);
        $this->dbforge->create_table('teachers_data', TRUE);
        
        if ($this->db->table_exists('teachers_data') )
        {
            echo "'teachers_data' table created";
        }
        else
        {
            echo "not";
        }
    }
}