<?
class Events_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function events() {

        $sql = "SELECT * FROM events";

        return $this->db->query($sql);

    }

    public function event($id) {

        $sql = "SELECT * FROM events WHERE id = ?";

        return $this->db->query($sql, $id);

    }

    public function create_event($title, $description, $date) {

        $sql = "INSERT INTO `events`
                (`title`, `description`, `date`)
                VALUES
                (?, ?, ?)";
        $this->db->query($sql, array($title, $description, $date));

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

    public function future_events() {

        $sql = "SELECT * FROM events WHERE `date` >= CURDATE()";

        return $this->db->query($sql);

    }

}

?>