<?
class Events_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function events() {

        $sql = "SELECT * FROM events WHERE active = 1";

        return $this->db->query($sql);

    }

    public function event($id) {

        $sql = "SELECT * FROM events WHERE id = ?";

        return $this->db->query($sql, $id);

    }

    public function create_event($title, $description, $date) {

        $mysqldate = date( 'Y-m-d H:i:s', strtotime($date) );

        $sql = "INSERT INTO `events`
                (`title`, `description`, `date`)
                VALUES
                (?, ?, ?)";
        $this->db->query($sql, array($title, $description, $mysqldate));

    }

    public function update_event($title, $description, $date, $id) {

        $mysqldate = date( 'Y-m-d H:i:s', strtotime($date) );

        $sql = "UPDATE `events`
                SET
                `title` = ?,
                `description` = ?,
                `date` = ?
                WHERE `id` = ?";
        $this->db->query($sql, array($title, $description, $mysqldate, $id));

    }

    public function delete_event($id) {

        $sql = "UPDATE `events`
                SET
                `active` = 0
                WHERE `id` = ?";
        $this->db->query($sql, $id);

    }

    public function future_events() {

        $sql = "SELECT * FROM events WHERE `date` >= CURDATE() AND active = 1";

        return $this->db->query($sql);

    }

}

?>